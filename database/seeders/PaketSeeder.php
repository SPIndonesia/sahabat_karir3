<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create(
            [
                [
                    'nama' => 'SBMPTN',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 1,
                    'image_url' => 'foto.png'
                ], [
                    'nama' => 'ROUTE',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 1,
                    'image_url' => 'foto.png'
                ]

            ]
        );
    }
}
