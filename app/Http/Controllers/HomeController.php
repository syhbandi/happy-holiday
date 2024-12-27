<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function package(): View
    {
        $packages = [
            ['id' => 1, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Tour Lombok 2 hari 1 malam', 'price' => 254000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
            ['id' => 2, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Tour Lombok 3 hari 2 malam', 'price' => 745000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
            ['id' => 3, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Tour Lombok 4 hari 3 malam', 'price' => 1425000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
            ['id' => 4, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Tour Lombok 5 hari 4 malam', 'price' => 2005000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
            ['id' => 5, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Private Adventure', 'price' => 6000000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
            ['id' => 6, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Private Relaxation', 'price' => 7000000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
            ['id' => 7, 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis magnam aspernatur expedita eaque, reprehenderit alias fugiat similique labore reiciendis nam eveniet praesentium a. Minus provident pariatur dolorum a ducimus.', 'name' => 'Private Culture', 'price' => 7000000, 'image' => asset('images/lombok-thumbnail-YZ9XnLbRLxUVbNrZ.avif')],
        ];
        return view('package', compact('packages'));
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
