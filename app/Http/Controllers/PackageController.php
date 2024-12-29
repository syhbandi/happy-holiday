<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PackageController extends Controller
{
  public function index()
  {
    $packages = Package::with('sub_packages')->simplePaginate(10);
    return view('admin.packages.index', compact('packages'));
  }

  public function create()
  {
    return view('admin.packages.create');
  }

  public function store(Request $request)
  {
    // Validasi input
    $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'price' => 'required|numeric|min:0',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maks 2MB
    ]);

    // Buat slug dari nama paket
    $slug = Str::slug($request->name);
    $imagePath = null;
    if ($request->hasFile('image')) {
      $imagePath = $request->file('image')->store('packages', 'public'); // Simpan di storage/app/public/packages
    }

    $package = new Package();
    $package->name = $request->name;
    $package->slug = $slug;
    $package->description = $request->description;
    $package->price = $request->price;
    $package->image = $imagePath; // Simpan path gambar
    $package->save();

    if (!$package) {
      Storage::disk('public')->delete($imagePath);
      return redirect()->back()->withErrors(['status' => 'Gagal menambah paket!'])->withInput($request->all());
    }

    return redirect('admin/packages')->with('success', 'Package created successfully!');
  }
}
