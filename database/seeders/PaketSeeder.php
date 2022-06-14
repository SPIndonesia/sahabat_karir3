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
        $paket =
            [
                [
                    'nama' => 'Paket1',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 1,
                    'image_url' => 'foto.png'
                ], [
                    'nama' => 'Paket 3',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 2,
                    'image_url' => 'foto.png'
                ],
                [
                    'nama' => 'Paket 4',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 3,
                    'image_url' => 'foto.png'
                ],
                [
                    'nama' => 'Paket 5',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 4,
                    'image_url' => 'foto.png'
                ],
                [
                    'nama' => 'Paket 6',
                    'harga' => 10000,
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'id_kategori' => 5,
                    'image_url' => 'foto.png'
                ],
            ];

        foreach ($paket as $key => $paket) {
            Paket::create($paket);
        }
    }
}
