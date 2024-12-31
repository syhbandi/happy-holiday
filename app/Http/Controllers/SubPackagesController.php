<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\SubPackage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
            'package' => 'required'
        ]);

        $subPackage = new SubPackage($request->except('package'));
        $package = Package::find($request->package);
        $package->sub_packages()->save($subPackage);

        if (!$package) {
            return redirect()->back()->withErrors(['status' => 'Gagal menambah sub paket!'])->withInput($request->all());
        }

        return redirect('admin/sub-packages')->with('success', 'Berhasil menambah sub paket!');
    }
}
