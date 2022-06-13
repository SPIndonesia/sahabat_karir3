<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class Pembayaran extends Controller
{
    public function index()
    {
        $data_pembayaran = Orders::all();
        $data = [
            'judul'         => 'Sahabat Karir | Pembayaran',

            'css'           => [
                'components/tabelAdmin'
            ],

            'js'            => [
                'admin/pembayaran'
            ],

            'data_pembayaran' => $data_pembayaran,
        ];

        return $this->adminPages('pembayaran', $data);
    }
}
