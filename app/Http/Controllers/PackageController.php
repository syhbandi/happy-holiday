<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

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
}
