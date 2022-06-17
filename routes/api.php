<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Kategori\CreateKategoriController;
use App\Http\Controllers\Api\Kategori\DeleteKategoriController;
use App\Http\Controllers\Api\Kategori\GetKategoriController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\Kategori\ShowKategoriController;
use App\Http\Controllers\Api\Kategori\UpdateKategoriController;
use App\Http\Controllers\Api\Paket\CreatePaketController;
use App\Http\Controllers\Api\Paket\DeletePaketController;
use App\Http\Controllers\Api\Paket\GetPaketController;
use App\Http\Controllers\Api\Paket\GetUserPerKategoriController;
use App\Http\Controllers\Api\Paket\ShowPaketController;
use App\Http\Controllers\Api\Paket\UpdatePaketController;
use App\Http\Controllers\Api\PembayaranController;
use App\Http\Controllers\Api\UserPaket\CreateUserPaketController;
use App\Http\Controllers\Api\UserPaket\DeleteUserPaketController;
use App\Http\Controllers\Api\UserPaket\GetUserPaketController;
use App\Http\Controllers\Api\UserPaket\ShowUserPaketController;
use App\Http\Controllers\Api\UserPaket\UpdateUserPaketController;
use App\Models\Kategori;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::middleware(['auth:sanctum'])->group(function () {

    // kategori
    route::post('kategori/tambah', CreateKategoriController::class);
    route::get('kategori/{id}', ShowKategoriController::class);
    route::delete('kategori/hapus/{id}', DeleteKategoriController::class);
    route::put('kategori/ubah/{id}', UpdateKategoriController::class);

    route::post('paket/tambah', CreatePaketController::class);
    route::get('paket/{id}', ShowPaketController::class);
    route::delete('paket/hapus/{id}', DeletePaketController::class);
    route::put('paket/ubah/{id}', UpdatePaketController::class);

    route::post('/logout', LogoutController::class);



    route::get('user/paket',   GetUserPaketController::class);
    route::post('user/paket/tambah', CreateUserPaketController::class);
    route::get('user/paket/{id}', ShowUserPaketController::class);
    route::delete('user/paket/hapus/{id}', DeleteUserPaketController::class);
    route::put('user/paket/ubah/{id}', UpdateUserPaketController::class);
});



route::get('kategori',   GetKategoriController::class);


route::get('paket', GetPaketController::class);
route::get('paket/kategori/{id}', GetUserPerKategoriController::class);

route::post('/pembayaran-handler', PembayaranController::class);

route::post('/register', RegisterController::class);
route::post('/login', LoginController::class);
