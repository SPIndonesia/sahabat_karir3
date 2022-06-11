<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Sahabat Karir | Tentang Website',

            'css'           => [
                'components/tabelAdmin',
                'components/popup'
            ],

            'js'            => [
                'admin/about'
            ]
        ];

        return $this->adminPages('about', $data);
    }
}
