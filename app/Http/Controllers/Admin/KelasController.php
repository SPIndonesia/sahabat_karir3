<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Kelas Pelatihan | Admin',

            'css'           => ['kelas'],

            'js'            => []
        ];

        return view('kelas', $data);
    }
}
