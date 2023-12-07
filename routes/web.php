<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionHistoryController;

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

// Route::resource('/TransactionHistory', TransactionHistoryController::class);
Route::get('transaction-history', [TransactionHistoryController::class, 'index'])->name('transaction-history.index');
Route::get('transaction-history/show/{id}', [TransactionHistoryController::class, 'show'])->name('transaction-history.show');
