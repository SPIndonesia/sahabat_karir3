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
                'pages/admin/beranda'
            ],

            'js'        => [

                // -- Google Chart
                'admin/loader',
                'admin/chart'
            ]
        ];

        return $this->adminPages('beranda', $data);
    }
}
