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

            'css'           => [],

            'js'            => []
        ];

        return $this->adminPages('pembayaran', $data);
    }
}
