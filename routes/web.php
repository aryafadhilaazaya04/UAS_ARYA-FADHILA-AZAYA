<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Hapus alias 'products', gunakan hanya resource agar semua route resource aktif
Route::resource('products', ProductController::class);
// Tambahkan alias khusus untuk products.index jika memang dibutuhkan
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Alias agar route('products') juga tersedia dan mengarah ke index
Route::get('/products-alias', [ProductController::class, 'index'])->name('products');