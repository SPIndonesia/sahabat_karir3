<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Orders;
use App\Models\UserPaket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            // OrdersSeeder::class,
            // KategoriSeeder::class,
            // PaketSeeder::class,
            // UserPaket::class,
        ]);
    }
}
