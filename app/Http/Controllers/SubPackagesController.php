<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\SubPackage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SubPackagesController extends Controller
{
    public function index(): View
    {
        $subPackages = SubPackage::paginate(10);
        return view('admin.sub_package.index', compact('subPackages'));
    }

    public function create(): View
    {
        $packages = Package::with('sub_packages')->get();
        return view('admin.sub_package.create', compact('packages'));
    }

    public function edit(SubPackage $subPackage): View
    {
        $packages = Package::with('sub_packages')->get();
        return view('admin.sub_package.edit', compact('subPackage', 'packages'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'package' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('packages', 'public'); // Simpan di storage/app/public/packages
        }

        $subPackage = new SubPackage($request->except('package', 'image'));
        $subPackage->image = $imagePath;
        $package = Package::find($request->package);
        $package->sub_packages()->save($subPackage);

        if (!$package) {
            Storage::disk('public')->delete($imagePath);
            return redirect()->back()->withErrors(['status' => 'Gagal menambah sub paket!'])->withInput($request->all());
        }

        return redirect('admin/sub-packages')->with('success', 'Berhasil menambah sub paket!');
    }

    public function update(Request $request, SubPackage $subPackage)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'package' => 'required'
        ]);

        $subPackage->update($request->except('package'));
        $package = Package::find($request->package);
        $save = $package->sub_packages()->save($subPackage);

        if (!$save) {
            return redirect()->back()->withErrors(['status' => 'Gagal Mengubah sub paket!'])->withInput($request->all());
        }

        return redirect('admin/sub-packages')->with('success', 'Berhasil mengubah sub paket!');
    }

    public function delete(SubPackage $subPackage): RedirectResponse
    {
        $delete = $subPackage->delete();

        if (!$delete) {
            return redirect()->back()->withErrors(['status' => 'Gagal menghapus sub paket!']);
        }

        return redirect('admin/sub-packages')->with('success', 'Berhasil menghapus sub paket!');
    }
}
