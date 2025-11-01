<?php

use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Store\Auth\ForgotPasswordController;
use App\Http\Controllers\Store\Auth\LoginController;
use App\Http\Controllers\Store\Auth\RegisterController;
use App\Http\Controllers\Store\Auth\ResetPasswordController;
use App\Http\Controllers\Store\CartController;
use App\Http\Controllers\Store\CategoryController;
use App\Http\Controllers\Store\CheckoutController;
use App\Http\Controllers\Store\CurrencyController;
use App\Http\Controllers\Store\Customer\ProfileController;
use App\Http\Controllers\Store\PaymentGateway\StripeController;
use App\Http\Controllers\Store\ProductController;
use App\Http\Controllers\Store\ReviewController;
use App\Http\Controllers\Store\SearchController;
use App\Http\Controllers\Store\ShopController;
use App\Http\Controllers\Store\WishlistController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('xylo.home');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::post('/change-currency', [CurrencyController::class, 'changeCurrency'])->name('change.currency');

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/change-store-language', [LanguageController::class, 'changeLanguage'])->name('change.store.language');

Route::post('/cart/apply-coupon', [CartController::class, 'applyCoupon'])->name('cart.applyCoupon');
Route::post('/cart/remove-coupon', [CartController::class, 'removeCoupon'])->name('cart.removeCoupon');

Route::get('/products', [ShopController::class, 'index'])->name('shop.index');

Route::get('/search-suggestions', [SearchController::class, 'suggestions']);
Route::get('/search', [SearchController::class, 'searchResults']);

Route::get('/get-variant-price', [ProductController::class, 'getVariantPrice'])->name('product.variant.price');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

// Category page
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::post('/product/review/store', [ReviewController::class, 'store'])->name('review.store');

Route::prefix('customer')->name('customer.')->group(function () {

    // Guest routes
    Route::middleware('guest:customer')->group(function () {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login']);

        Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [RegisterController::class, 'register']);

        Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

        Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
    });

    // Authenticated routes
    Route::middleware('auth.customer')->group(function () {
        Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
        Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');

        //  Customer Profile Routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    });
});

Route::get('/stripe/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout.process');
