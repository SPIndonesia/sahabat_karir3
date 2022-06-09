<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data = [
            'judul'     => 'Beranda Admin',

            'css'       => [
                'beranda'
            ],

            'js'        => [
                'beranda'
            ]
        ];

        return $this->adminPages('beranda', $data);
    }
}
