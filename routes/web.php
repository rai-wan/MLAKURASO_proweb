<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaihanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListBarangController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Praktikum 9 & 10
Route::get('/produk', [ListProdukController::class, 'show'])->name('produk.list');
Route::post('/produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::get('/produk/edit/{id}', [ListProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [ListProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/delete/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');

// Halaman Tempat Makan oleh Raihan
Route::get('/places', [RaihanController::class, 'index']);

// Halaman Event Kuliner oleh Shifa
Route::get('/events', [EventController::class, 'index']);

// Halaman Trending oleh Charlie
Route::get('/trending', [TrendingController::class, 'index']);

// List Barang
Route::get('/barang', [ListBarangController::class, 'tampilkan']);

// Static pages
Route::view('/home', 'pages.home');
Route::view('/product', 'product');
Route::view('/about', 'about');
Route::view('/dashboard', 'dashboard');
Route::view('/login', 'login');
Route::view('/public-test', 'public-test');
Route::view('/raihan', 'raihan_view');

// Produk dummy list (optional jika tidak dipakai bisa dihapus)
Route::get('/list-product', [ProductController::class, 'index']);
