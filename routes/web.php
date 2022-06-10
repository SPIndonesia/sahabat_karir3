<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// TODO: Home
// --------------------------------- create here

// TODO: Admin
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\Pembayaran;

// TODO: User
use App\Http\Controllers\PembayaranController;
use App\Models\Paket;

// TODO: Default
Route::get('/', [HomeController::class, 'index']);


// TODO: Auth Laravel
Auth::routes();


// TODO: Admin
Route::middleware(['auth', 'admin'])->group(function () {
    // -- Beranda
    Route::get('/admin/beranda', [BerandaController::class, 'index'])->name('admin');

    // -- User
    Route::get('/admin/user', [UserController::class, 'index']);
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

    // -- Kelas
    Route::get('/admin/kelas', [KelasController::class, 'index']);

    // -- Testimoni
    Route::get('/admin/testimoni', [TestimoniController::class, 'index']);

    // -- Pembayaran
    Route::get('/admin/pembayaran', [Pembayaran::class, 'index']);
});




// TODO: User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('coba/admin2', function () {
        return 'admin';
    });
});




// TODO: Pembayaran
Route::get('/landingPaket/{id}', function ($id) {
    $data = [
        'judul'     => 'Landing Paket',

        'css'       => [
            'page/home/landingPage'
        ],

        'js'        => [],

        'data_paket' => Paket::where('id_kategori', $id)->get()
    ];
    return view('landingPaket',  $data);
})->name('landingPaket');

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/{id}', [PembayaranController::class, 'pay'])->name('pay');
Route::post('/pembayaran/{id}', [PembayaranController::class, 'payPost'])->name('payPost');
