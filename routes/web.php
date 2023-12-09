<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\ProfileController;


Route::get('/productdisplay', [ShoeController::class, 'productdisplay'])->name('productdisplay');
Route::get('/productdetail/{id}', [ShoeController::class, 'productdetail'])->name('productdetail');

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/navbar', function () {
    return view('navbar');
});


// Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('form');
Route::post('/home/store', [HomeController::class, 'store'])->name('storeHome');

Route::prefix('/cart')->group(function(){
    Route::get('/home', [CartController::class, 'index']);
    Route::get('/addCart/{id}', [CartController::class, 'addCart'])->name('add');
    Route::get('/create/{id}', [CartController::class, 'create'])->name('cart');
    Route::post('/store/{id}', [CartController::class, 'store'])->name('store');
    // Route::delete('/delete/{id}', [CartController::class, 'destroy'])->name('delete');
});

Route::delete('/delete/{id}', [CartController::class, 'destroy'])->name('delete');

Route::get('/checkout', function(){
    return view('checkout');
});

// Route::resource('/TransactionHistory', TransactionHistoryController::class);
Route::get('transaction-history', [TransactionHistoryController::class, 'index'])->name('transaction-history.index');
Route::get('transaction-history/show/{id}', [TransactionHistoryController::class, 'show'])->name('transaction-history.show');

