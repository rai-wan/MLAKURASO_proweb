<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaihanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TrendingController;

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

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tempat Makan oleh Raihan
Route::get('/places', [RaihanController::class, 'index']);

// Halaman Event Kuliner oleh shifa
Route::get('/events', [EventController::class, 'index']);

// Halaman Trending oleh Charlie
Route::get('/trending', [TrendingController::class, 'index']);

use App\Http\Controllers\ListBarangController;

Route::get('/barang', [ListBarangController::class, 'tampilkan']);


Route::view('/home', 'home');
Route::view('/product', 'product');
Route::view('/about', 'about');
Route::view('/dashboard', 'dashboard');

Route::get('/public-test', function () {
    return view('public-test');
});
Route::get('/raihan', function () {
    return view('raihan_view');
});
Route::view('/login', 'login');

<<<<<<< HEAD
//punya sifa
Route::get('/Dashboard_view', function () {
   return view('Dashboard_view');
   });

=======

Route::get('/list-product', function () {
    $data = [
        ['id' => 1, 'produk' => 'Ikan Cupang'],
        ['id' => 2, 'produk' => 'Ikan Koi'],
        ['id' => 3, 'produk' => 'Ikan Arwana']
    ];
    return view('list_product', compact('data'));
});

use App\Http\Controllers\ProductController;

Route::get('/list-product', [ProductController::class, 'index']);
>>>>>>> 9978b3c (Update praktikum 6 - tambah komponen header dan footer)
