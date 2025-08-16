<?php

use App\Http\Controllers\Vendor\Auth\AuthController;
use App\Http\Controllers\Vendor\DashboardController;
use App\Http\Controllers\Vendor\ProductController;
use App\Http\Controllers\Vendor\SocialMediaLinkController;
use Illuminate\Support\Facades\Route;

Route::prefix('vendor')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('vendor.login');
    Route::post('/login', [AuthController::class, 'login'])->name('vendor.login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth.vendor')->name('vendor.logout');

    Route::middleware('auth.vendor')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('vendor.dashboard');
        Route::resource('products', ProductController::class)->names('vendor.products');
        Route::post('products/data', [ProductController::class, 'getProducts'])->name('vendor.products.data');
        Route::post('products/updateStatus', [ProductController::class, 'updateStatus'])->name('vendor.products.updateStatus');
        Route::resource('social-media-links', SocialMediaLinkController::class)->names('vendor.social-media-links');
        Route::post('social-media-links/data', [SocialMediaLinkController::class, 'getData'])->name('vendor.social-media-links.data');
    });
});
