<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/package', [HomeController::class, 'package']);
Route::get('/about', [HomeController::class, 'about']);
route::get('/contact', [HomeController::class, 'contact']);
Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('/auth/authenticate', [AuthController::class, 'authenticate']);

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/admin/logout', [AuthController::class, 'logout']);
});
