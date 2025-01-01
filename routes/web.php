<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SubPackagesController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/packages', [HomeController::class, 'packages']);
Route::get('/packages/{package:slug}', [HomeController::class, 'package']);
Route::get('/about', [HomeController::class, 'about']);
route::get('/contact', [HomeController::class, 'contact']);
Route::get('/admin/login', [AuthController::class, 'login']);
Route::post('/auth/authenticate', [AuthController::class, 'authenticate']);
Route::get('/sitemap', [SitemapController::class, 'generateSitemap']);
Route::get('/symlink', function () {
    Artisan::call('storage:link');
});

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);

    Route::get('/admin/packages', [PackageController::class, 'index']);
    Route::post('/admin/packages', [PackageController::class, 'store']);
    Route::put('/admin/packages/{package}', [PackageController::class, 'update']);
    Route::get('/admin/packages/create', [PackageController::class, 'create']);
    Route::get('/admin/packages/{package:slug}/edit', [PackageController::class, 'edit']);
    Route::delete('/admin/packages/{package}', [PackageController::class, 'destroy']);

    Route::get('/admin/sub-packages', [SubPackagesController::class, 'index']);
    Route::get('/admin/sub-packages/create', [SubPackagesController::class, 'create']);
    Route::get('/admin/sub-packages/{subPackage}/edit', [SubPackagesController::class, 'edit']);
    Route::post('/admin/sub-packages', [SubPackagesController::class, 'store']);
    Route::put('/admin/sub-packages/{subPackage}', [SubPackagesController::class, 'update']);
    Route::delete('/admin/sub-packages/{subPackage}', [SubPackagesController::class, 'delete']);

    Route::get('/admin/profile', [AuthController::class, 'profile']);
    Route::post('/admin/profile', [AuthController::class, 'update']);
    Route::post('/admin/profile/password', [AuthController::class, 'updatePassword']);
    Route::get('/admin/logout', [AuthController::class, 'logout']);
});
