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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/store', function () {
    return view('dashboard');
})->middleware(['auth'])->name('store');

Route::get('/orders', function () {
    return view('dashboard');
})->middleware(['auth'])->name('orders');

Route::get('/products', function () {
    return view('dashboard');
})->middleware(['auth'])->name('products');

Route::get('/customers', function () {
    return view('dashboard');
})->middleware(['auth'])->name('customers');

Route::get('/payments', function () {
    return view('dashboard');
})->middleware(['auth'])->name('payments');

Route::get('/categories', function () {
    return view('dashboard');
})->middleware(['auth'])->name('categories');

Route::get('/invoices', function () {
    return view('dashboard');
})->middleware(['auth'])->name('invoices');

Route::get('/insight', function () {
    return view('dashboard');
})->middleware(['auth'])->name('insight');

Route::get('/applications', function () {
    return view('dashboard');
})->middleware(['auth'])->name('applications');

Route::get('/marketing', function () {
    return view('dashboard');
})->middleware(['auth'])->name('marketing');

require __DIR__.'/auth.php';
