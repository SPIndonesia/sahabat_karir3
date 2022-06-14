<?php

namespace Database\Seeders;

use App\Models\UserPaket;
use Illuminate\Database\Seeder;

class UserPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userpaket = [
            [
                'id_user' => 1,
                'id_paket' => 1,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 2,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 3,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 4,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 5,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 4,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 2,
                'id_pembayaran' => 3,
                'status' => "asda",
            ],
            [
                'id_user' => 1,
                'id_paket' => 2,
                'id_pembayaran' => 3,
                'status' => "asda",
            ]
        ];

        foreach ($userpaket as $key => $userpaket) {
            UserPaket::create($userpaket);
        }
    }
}
