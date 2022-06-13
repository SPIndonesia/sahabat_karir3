<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// TODO: Home
// --------------------------------- create here

// TODO: Admin
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\JumbotronController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KeunggulanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\Admin\Pembayaran;
use App\Http\Controllers\Admin\TestimoniController;
// TODO: User
use App\Http\Controllers\PembayaranController;

// TODO: Default
Route::get('/', [HomeController::class, 'index']);


// TODO: Auth Laravel
Auth::routes();


// TODO: Admin
Route::middleware(['auth', 'admin'])->group(function () {
    // -- Beranda
    Route::get('admin/beranda', [BerandaController::class, 'index'])->name('admin');

    // -- User
    Route::get('admin/user', [UserController::class, 'index']);
    Route::delete('admin/user/delete/$id', [UserController::class, 'destroy'])->name('user.delete');

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

    // -- Jumbotron
    Route::get('admin/jumbotron', [JumbotronController::class, 'index']);
    Route::post('admin/jumbotron/store', [JumbotronController::class, 'store'])->name('jumbotron.store');
    Route::put('admin/jumbotron/ubah/{id}', [JumbotronController::class, 'ubah'])->name('jumbotron.ubah');
    Route::delete('admin/jumbotron/hapus/{id}', [JumbotronController::class, 'hapus'])->name('jumbotron.hapus');

    // -- Kenggulan
    Route::get('admin/keunggulan', [KeunggulanController::class, 'index']);
    Route::post('admin/keunggulan/store', [KeunggulanController::class, 'store'])->name('keunggulan.store');
    Route::put('admin/keunggulan/ubah/{id}', [KeunggulanController::class, 'ubah'])->name('keunggulan.ubah');
    Route::delete('admin/keunggulan/hapus/{id}', [KeunggulanController::class, 'hapus'])->name('keunggulan.hapus');

    // -- Tentang Kami
    Route::get('admin/tentangkami', [TentangKamiController::class, 'index']);
    Route::post('admin/tentangkami/store', [TentangKamiController::class, 'store'])->name('tentangkami.store');
    Route::put('admin/tentangkami/ubah/{id}', [TentangKamiController::class, 'ubah'])->name('tentangkami.ubah');
    Route::delete('admin/tentangkami/hapus/{id}', [TentangKamiController::class, 'hapus'])->name('tentangkami.hapus');

    // -- Testimoni
    Route::get('admin/testimoni', [TestimoniController::class, 'index']);
    Route::post('admin/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::put('admin/testimoni/ubah/{id}', [TestimoniController::class, 'ubah'])->name('testimoni.ubah');
    Route::delete('admin/testimoni/hapus/{id}', [TestimoniController::class, 'hapus'])->name('testimoni.hapus');

    // -- Pembayaran
    Route::get('admin/pembayaran', [Pembayaran::class, 'index']);
});


// TODO: User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('coba/admin2', function () {
        return 'admin';
    });

    // -- Pembayaran
    Route::get('/paket/{id}', [UserController::class, 'paket'])->name('landingPaket');

    Route::get('/pembayaran/{id}', [PembayaranController::class, 'pay'])->name('pay');
    Route::post('/pembayaran/{id}', [PembayaranController::class, 'payPost'])->name('payPost');
});
