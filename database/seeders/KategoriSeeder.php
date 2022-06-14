<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'nama' => 'SBMPTN',
                'deskripsi' => 'iniDeskripsi',
                'image_url' => 'belumada.png',
            ],
            [
                'nama' => 'IKADIN',
                'deskripsi' => 'iniDeskripsi',
                'image_url' => 'belumada.png',
            ],
            [
                'nama' => 'CPNS',
                'deskripsi' => 'iniDeskripsi',
                'image_url' => 'belumada.png',
            ],
            [
                'nama' => 'POLRI',
                'deskripsi' => 'iniDeskripsi',
                'image_url' => 'belumada',
            ],
            [
                'nama' => 'PELATIHAN',
                'deskripsi' => 'iniDeskripsi',
                'image_url' => 'belumada.png',
            ],
        ];

        foreach ($kategori as $key => $kategori) {
            Kategori::create($kategori);
        }
    }
}
