<?php

use App\Http\Controllers\ReturnController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/review/{id}', [ReviewController::class, 'viewReview'])->name('viewReview');

Route::post('/review/{id}', [ReviewController::class, 'createReview'])->name('createReview');

Route::get('/return/{id}', [ReturnController::class, 'viewReturn'])->name('viewReturn');

Route::post('/return/{id}', [ReturnController::class, 'updateStock'])->name('updateStock');