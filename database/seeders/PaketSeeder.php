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
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'image_url' => 'foto.png'
                ], [
                    'nama' => 'ROUTE',
                    'deskripsi' => "Lorem, ipsum dolor.",
                    'image_url' => 'foto.png'
                ]

            ]
        );
    }
}
