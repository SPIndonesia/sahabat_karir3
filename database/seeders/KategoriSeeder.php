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
        Kategori::create([
            ['nama' => 'sbmptn', 'deskripsi' => "Lorem, ipsum dolor.", 'image_url' => 'foto.png'],
            ['nama' => 'Polri', 'deskripsi' => "Lorem, ipsum dolor.", 'image_url' => 'foto.png']
        ]);
    }
}
