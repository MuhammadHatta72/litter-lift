<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'gender' => 'Laki-laki',
            'address' => 'Malang',
            'phone' => '081554073743',
            'photo' => 'not_found',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // User::factory(24)->create();
    }
}
