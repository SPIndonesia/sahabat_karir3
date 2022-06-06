<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sahabatkarir;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;

// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::put('kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
// Route::delete('kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('coba/admin', function () {
        return 'home';
    });
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::delete('/admin/user/delete/$id', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('admin/kategori', [KategoriController::class, 'index']);
    Route::get('admin/paket', [PaketController::class, 'index']);
    Route::post('admin/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::post('admin/paket/store', [PaketController::class, 'store'])->name('paket.store');
    Route::put('admin/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
    Route::put('admin/paket/ubah/{id}', [PaketController::class, 'ubah'])->name('paket.ubah');
    Route::delete('admin/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');

    Route::get('/admin/pembayaran', [PembayaranController::class, 'index']);

    Route::delete('admin/paket/hapus/{id}', [PaketController::class, 'hapus'])->name('paket.hapus');
    Route::get('/admin/pembayaran', [UserController::class, 'index']);
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('coba/admin2', function () {
        return 'admin';
    });
});

Route::get('/beranda', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
// Route::get('/pembayaran', [PembayaranController::class, 'index']);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/paket/{id}', [HomeController::class, 'landingpaket'])->name('landingpaket');
Route::get('/pembayaran/{id}', [PembayaranController::class, 'pay'])->name('pay');
Route::post('/pembayaran/{id}', [PembayaranController::class, 'paypost'])->name('paypost');
