<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductPackageController;
use App\Http\Controllers\Admin\TransactionController;
use App\Models\ProductPackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\http\controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail/{slug}', [App\http\controllers\DetailController::class, 'index'])->name('detail');

Route::get('/cart', [App\http\controllers\CartController::class, 'index'])->name('cart');
// Route::post('/cart/{id}', [App\http\controllers\CartController::class, 'process'])
//     ->name('cart_process')
//     ->middleware(['auth','verified']);

// Route::get('/cart/{id}', [App\http\controllers\CartController::class, 'index'])
//     ->name('Cart')
//     ->middleware(['auth','verified']);

Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])->group(function () {
    Route::get ('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->name('dashboard');
});

Route::resource('product-package', ProductPackageController::class);

Route::resource('gallery', GalleryController::class);

Route::resource('transaction', TransactionController::class);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
