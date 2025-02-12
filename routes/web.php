<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CustomerController::class)->group(function () {
    Route::get('customer/list', 'list')->name('customer.search');
    Route::get('customer/search', 'search')->name('customer.search');
});


Route::controller(TransactionController::class)->group(function () {
    Route::get('transactions/{customerId}', 'list')->name('transaction.index');
});

