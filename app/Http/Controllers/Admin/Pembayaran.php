<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pembayaran extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Sahabat Karir | Pembayaran',

            'css'           => [
                'components/tabelAdmin'
            ],

            'js'            => [
                'admin/pembayaran'
            ]
        ];

        return $this->adminPages('pembayaran', $data);
    }
}
