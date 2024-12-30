<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/packages', [HomeController::class, 'packages']);
Route::get('/packages/{package:slug}', [HomeController::class, 'package']);
Route::get('/about', [HomeController::class, 'about']);
route::get('/contact', [HomeController::class, 'contact']);
Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('/auth/authenticate', [AuthController::class, 'authenticate']);

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);

    Route::get('/admin/packages', [PackageController::class, 'index']);
    Route::post('/admin/packages', [PackageController::class, 'store']);
    Route::put('/admin/packages/{package}', [PackageController::class, 'update']);
    Route::get('/admin/packages/create', [PackageController::class, 'create']);
    Route::get('/admin/packages/{package:slug}/edit', [PackageController::class, 'edit']);
    Route::delete('/admin/packages/{package}', [PackageController::class, 'destroy']);

    Route::get('/admin/logout', [AuthController::class, 'logout']);
});
