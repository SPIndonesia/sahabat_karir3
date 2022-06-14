<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                "id_user" => 1,
                "id_paket" => 1,
                "status" => "settlement",
                "id_transaksi" => 1,
                "id_order" => 1,
                "jumlah_dibayar" => 10000000,
                "jenis_pembayaran" => "gopay",
                "kode_pembayaran" => "uvuvwevwe",
                "invoice" => "ini invoice",
            ],
            [
                "id_user" => 2,
                "id_paket" => 2,
                "status" => "settlement",
                "id_transaksi" => 4,
                "id_order" => 3,
                "jumlah_dibayar" => 30000000,
                "jenis_pembayaran" => "gopay",
                "kode_pembayaran" => "uvuvwevwe",
                "invoice" => "ini invoice",
            ],
            [
                "id_user" => 5,
                "id_paket" => 5,
                "status" => "pending",
                "id_transaksi" => 5,
                "id_order" => 5,
                "jumlah_dibayar" => 0,
                "jenis_pembayaran" => "gopay",
                "kode_pembayaran" => "uvuvwevwe",
                "invoice" => "ini invoice",
            ],

        ];

        foreach ($orders as $key => $orders) {
            Orders::create($orders);
        }
    }
}
