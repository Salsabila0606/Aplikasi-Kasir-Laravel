<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::get('/product', function () {
    return view('product', [
        "products" => Product::all()
    ]);
});

Route::get('/transaction', function () {
    return view('transaction', [
        "products" => Product::all()
    ]);
});

Route::get('/transaction-list', function () {
    return view('transactionlist', [
        "title" => "Daftar Transaksi"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/findProductName', [ProductController::class, 'findProductName']);
Route::get('/findProductPrice', [ProductController::class, 'findProductPrice']);
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart', [ProductController::class, 'transaction'])->name('transaction');
