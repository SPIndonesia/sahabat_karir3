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

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/testimoni'
            ],

            'js'            => [
                'admin/testimoni'
            ]
        ];

        return $this->adminPages('testimoni', $data);
    }
}
