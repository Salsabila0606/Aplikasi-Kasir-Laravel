<?php

use App\Http\Controllers\BarangController;
use App\Models\master_barang;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/barang', function () {
    return view('barang', [
        "barangs" => master_barang::all()
    ]);
});

Route::get('/transaksi', function () {
    return view('transaksi', [
        "barangs" => master_barang::all()
    ]);
});

Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "Daftar Transaksi"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cariNamaBarang', [BarangController::class, 'cariNamaBarang']);
Route::get('/cariHargaBarang', [BarangController::class, 'cariHargaBarang']);
