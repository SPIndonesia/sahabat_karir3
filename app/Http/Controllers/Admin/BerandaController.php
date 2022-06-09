<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function pages($page, $data)
    {
        return view('admin/' . $page, $data);
    }

    public function index()
    {
        $data = [
            'judul'     => 'Beranda Admin',

            'css'       => [],

            'js'        => []
        ];

        return $this->pages('beranda', $data);
    }
}
