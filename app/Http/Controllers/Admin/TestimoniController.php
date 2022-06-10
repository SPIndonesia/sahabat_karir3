<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Sahabat Karir | Testimoni',

            'css'           => [],

            'js'            => []
        ];

        return $this->adminPages('testimoni', $data);
    }
}
