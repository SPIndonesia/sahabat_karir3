<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {

        $income = Orders::where('status', 'settlement')->get();
        $semua_user = User::where('role', 'user')->get();
        $semua_akun = User::all();
        $kategori = Kategori::all();
        $data = [
            'judul'     => 'Beranda Admin',

            'css'       => [
                'pages/admin/beranda'
            ],
            'income' => $income,
            'semua_user' => $semua_user,
            'semua_akun' => $semua_akun,
            'kategori' => $kategori,

            'js'        => [

                // -- Google Chart
                'admin/loader',
                'admin/chart'
            ]
        ];

        return view('admin.beranda', $data);
    }
}
