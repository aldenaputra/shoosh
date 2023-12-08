<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;

Route::get('/productdisplay', [ShoeController::class, 'productdisplay'])->name('productdisplay');
Route::get('/productdetail/{id}', [ShoeController::class, 'productdetail'])->name('productdetail');
