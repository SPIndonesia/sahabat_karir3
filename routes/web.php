<?php

use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\KelasController;
use Illuminate\Support\Facades\Auth;


// TODO: Default
Route::get('/', [Home::class, 'index']);


// TODO: Auth Laravel
Auth::routes();


// TODO: Admin
Route::middleware(['auth', 'admin'])->group(function () {
    // -- Beranda
    Route::get('/admin/beranda', [BerandaController::class, 'index']);

    // -- User
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin');
    Route::delete('/admin/user/delete/$id', [UserController::class, 'destroy'])->name('user.delete');

    // -- Kategori
    Route::get('admin/kategori', [KategoriController::class, 'index']);
    Route::post('admin/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::put('admin/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
    Route::delete('admin/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

    // -- Paket
    Route::get('admin/paket', [PaketController::class, 'index']);
    Route::post('admin/paket/store', [PaketController::class, 'store'])->name('paket.store');
    Route::put('admin/paket/ubah/{id}', [PaketController::class, 'ubah'])->name('paket.ubah');
    Route::delete('admin/paket/hapus/{id}', [PaketController::class, 'hapus'])->name('paket.hapus');

    // -- Pembayaran
    Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/admin/keranjang', [PembayaranController::class, 'keranjang']);

    // -- Kelas
    Route::get('/admin/kelas', [KelasController::class, 'index']);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('coba/admin2', function () {
        return 'admin';
    });
});

// TODO: End Testing

// Route::get('/pembayaran/{id}', [PembayaranController::class, 'pay'])->name('pay');
// Route::post('/pembayaran/{id}', [PembayaranController::class, 'paypost'])->name('paypost');