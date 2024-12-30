<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function packages(): View
    {
        $packages = Package::with('sub_packages')->paginate(10);
        return view('package', compact('packages'));
    }

    public function package(Package $package): View
    {
        return view('package_detail', compact('package'));
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }
}
