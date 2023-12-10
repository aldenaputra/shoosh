<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


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

Route::get('/', [ShoeController::class, 'productdisplay'])->name('productdisplay');

Auth::routes();

Route::get('/home', [ShoeController::class, 'productdisplay'])->name('productdisplay');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/productdisplay', [ShoeController::class, 'productdisplay'])->name('productdisplay');
Route::get('/productdetail/{id}', [ShoeController::class, 'productdetail'])->name('productdetail');

