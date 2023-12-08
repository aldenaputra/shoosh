<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
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

