<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;
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
