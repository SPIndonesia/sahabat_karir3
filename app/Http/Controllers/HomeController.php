<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
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

            'kategories'  => Kategori::all()
        ];

        return view('home/landingPage', $data);
    }
}
