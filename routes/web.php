<?php

use App\Http\Controllers\ShoeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'getAllElement']);

Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'processingRequest'])->name('processingRequest');

Route::get('/', [ShoeController::class, 'productdisplay'])->name('productdisplay');

Auth::routes();

Route::get('/home', [ShoeController::class, 'productdisplay'])->name('productdisplay');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/productdisplay', [ShoeController::class, 'productdisplay'])->name('productdisplay');
Route::get('/productdetail/{id}', [ShoeController::class, 'productdetail'])->name('productdetail');

Route::get('/addtocart/{id}', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::patch('update', [CartController::class, 'update'])->name('update');
Route::get('/remove', [CartController::class, 'clearCart'])->name('remove');

Route::get('/increaseQuantity', [CartController::class, 'increaseQuantity'])->name('cart.increaseQuantity');
Route::get('/decreaseQuantity}', [CartController::class, 'decreaseQuantity'])->name('cart.decreaseQuantity');

