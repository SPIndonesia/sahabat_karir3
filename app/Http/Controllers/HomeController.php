<?php

namespace App\Http\Controllers;

use App\Models\GambarCoursel;
use App\Models\Kategori;
use App\Models\Keunggulan;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'judul'     => 'SAHABAT KARIR',

            'css'       => [
                'pages/home/landingPage'
            ],

            'js'        => [
                'home/landingPage'
            ],

            'kategories'  => Kategori::all(),
            'jumbotrons'  => GambarCoursel::all(),
            'keunggulans'  => Keunggulan::all(),
            'visis'  => TentangKami::where('tipe', 'Visi')->get(),
            'misis'  => TentangKami::where('tipe', 'Misi')->get(),
        ];

        return view('home/landingPage', $data);
    }
}
