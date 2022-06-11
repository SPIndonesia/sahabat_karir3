<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeunggulanController extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Sahabat Karir | Keunggulan',

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/keunggulan'
            ],

            'js'            => [
                'admin/keunggulan'
            ]
        ];

        return $this->adminPages('keunggulan', $data);
    }
}
