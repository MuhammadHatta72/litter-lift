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
            'photo' => 'https://source.boringavatars.com/beam/120/admin@gmail.com?colors=fca2e1,93b5ff,6be4dc,f9e3a9,4a6cb6',
            'password' => bcrypt('password'),
        ]);

        User::factory(24)->create();
    }
}
