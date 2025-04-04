<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\SiteSettingsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SocialMediaLinkController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\ProductVariantController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\ProductReviewController;
use App\Http\Controllers\Admin\AttributeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* require base_path('routes/store.php'); */

Route::get('/login', function () {
    return view('admin.auth.login');
});

Auth::routes();


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    /* Dashboard */
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    /* Categories */
    Route::resource('categories', CategoryController::class);
    Route::post('/categories/data', [CategoryController::class, 'getCategories'])->name('categories.data');
    Route::post('/admin/categories/update-status', [CategoryController::class, 'updateCategoryStatus'])->name('categories.updateStatus');

    /* Products */
    Route::resource('products', ProductController::class);
    Route::post('products/data', [ProductController::class, 'getProducts'])->name('products.data');
    Route::post('admin/products/updateStatus', [ProductController::class, 'updateStatus'])->name('products.updateStatus');
   
    /* Brands */
    Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
    Route::get('admin/brands/getdata', [BrandController::class, 'getData'])->name('brands.getData');
    Route::get('brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
    Route::put('brands/{brand}', [BrandController::class, 'update'])->name('brands.update'); 
    Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create');
    Route::post('brands', [BrandController::class, 'store'])->name('brands.store');
    Route::delete('brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
    Route::post('brands/update-status', [BrandController::class, 'updateStatus'])->name('brands.updateStatus');

    /* Language */
    Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');

    /* Menu */
    Route::resource('menus', MenuController::class);
    Route::post('menus/data', [MenuController::class, 'getData'])->name('menus.data');

    /* Menu Items */
    Route::resource('menus.items', MenuItemController::class)->shallow();
    Route::get('menus-items', [MenuItemController::class, 'index'])->name('menus.item.index');
    Route::post('menus-items/getdata', [MenuItemController::class, 'getData'])->name('menus.item.getData');

    /* Banners */
    Route::resource('banners', BannerController::class);
    Route::post('banners/data', [BannerController::class, 'getData'])->name('banners.data');
    Route::post('/banners/update-status', [BannerController::class, 'updateStatus'])->name('banners.updateStatus');

    /* Social Media Link */
    Route::resource('social-media-links', SocialMediaLinkController::class);
    Route::post('social-media-links/data', [SocialMediaLinkController::class, 'getData'])->name('social-media-links.data');

    /* Orders */
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::post('orders/data', [OrderController::class, 'getData'])->name('orders.data');

    /* Product_Variants */
    Route::resource('product_variants', ProductVariantController::class);
    Route::post('/product_variants/data', [ProductVariantController::class, 'getData'])->name('product_variants.data');

     /* Customers */
    Route::resource('customers', CustomerController::class);
    Route::get('admin/customers/data', [CustomerController::class, 'getCustomerData'])->name('customers.data');

    /* Product Review */
    Route::get('/reviews/data', [ProductReviewController::class, 'getData'])->name('reviews.data');
    Route::resource('reviews', ProductReviewController::class)->except(['create', 'store']);

    /* Sellers */
    Route::resource('sellers', SellerController::class);

    /* Attributes */
    Route::resource('attributes', AttributeController::class);

    /* Attribute Value Management */
    Route::post('attributes/{attribute}/values', [AttributeController::class, 'storeValue'])->name('attributes.values.store');
    Route::delete('values/{value}', [AttributeController::class, 'destroyValue'])->name('values.destroy');
    Route::post('attributes/data', [AttributeController::class, 'getAttributesData'])->name('attributes.data');
    
    /* Attribute Value Translations Management */
    Route::post('values/{value}/translations', [AttributeController::class, 'storeTranslation'])->name('values.translations.store');
    Route::delete('translations/{translation}', [AttributeController::class, 'destroyTranslation'])->name('translations.destroy');
});

    /* Site Setting */
    Route::get('site-settings', [SiteSettingsController::class, 'index'])->name('site-settings.index');
    Route::get('site-settings/edit', [SiteSettingsController::class, 'edit'])->name('admin.site-settings.edit');
    Route::put('site-settings/update', [SiteSettingsController::class, 'update'])->name('admin.site-settings.update');
