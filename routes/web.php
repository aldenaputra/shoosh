<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionHistoryController;
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


// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/navbar', function () {
//     return view('navbar');
// });


Route::get('/', [ShoeController::class, 'productdisplay'])->name('productdisplay');

Auth::routes();

Route::get('/home', [ShoeController::class, 'productdisplay'])->name('productdisplay');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Route::resource('/TransactionHistory', TransactionHistoryController::class);
Route::get('/transaction-history', [TransactionHistoryController::class, 'index'])->name('transaction-history.index');
Route::get('/transaction-history/show/{id}', [TransactionHistoryController::class, 'show'])->name('transaction-history.show');

Route::get('/productdisplay', [ShoeController::class, 'productdisplay'])->name('productdisplay');
Route::get('/productdetail/{id}', [ShoeController::class, 'productdetail'])->name('productdetail');

Route::get('/addtocart/{id}', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::patch('update', [CartController::class, 'update'])->name('update');
Route::get('/remove', [CartController::class, 'clearCart'])->name('remove');

Route::get('/increaseQuantity', [CartController::class, 'increaseQuantity'])->name('cart.increaseQuantity');
Route::get('/decreaseQuantity}', [CartController::class, 'decreaseQuantity'])->name('cart.decreaseQuantity');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
});

Route::post('/checkout', [CheckoutController::class, 'processingRequest'])->name('processingRequest');


Route::get('/aboutus', [CheckoutController::class, 'processingRequest'])->name('aboutus');
