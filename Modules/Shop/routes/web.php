<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\app\Http\Controllers\ShopController;
use Modules\Shop\app\Http\Controllers\ProductController;
use Modules\Shop\app\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/category/{categorySlug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/tag/{tagSlug}', [ProductController::class, 'tag'])->name('products.tag');
Route::get('/{categorySlug}/{productSlug}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth'])->group(function(){
    Route::get('/carts',[CartController::class, 'index'])->name('carts.index');
});

Route::group([], function () {
    Route::resource('shop', ShopController::class)->names('shop');
});