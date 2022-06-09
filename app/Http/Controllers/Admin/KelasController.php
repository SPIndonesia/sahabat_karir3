<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    function pages($page, $data)
    {
        return view('admin/kelas/' . $page, $data);
    }

    public function index()
    {
        $data = [
            'judul'         => 'Kelas Pelatihan | Admin',

            'css'           => [],

            'js'            => []
        ];

        return $this->pages('kelas', $data);
    }
}
