<?php

namespace App\Http\Controllers;

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
            ]
        ];

        return view('home/landingPage', $data);
    }
}
