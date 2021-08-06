<?php

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


Route::get('account-list/{id}', 'App\Http\Controllers\Accounts@list');
Route::get('invoice-list/{tenantId}/{dateFrom}/{dateTo}', 'App\Http\Controllers\Invoices@list');
Route::get('invoice-list-ordered-by-amount/{tenantId}/{dateFrom}/{dateTo}', 'App\Http\Controllers\Invoices@list_ordered_by_amount');
