<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '090090990909',
                'password' => \bcrypt('admin123321'),
                'role' => 'admin',

            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'phone' => '090090990901',
                'password' => \bcrypt('user123321'),
                'role' => 'user',

            ],
        ];

        foreach ($user as $key => $user) {
            User::create($user);
        }
    }
}
