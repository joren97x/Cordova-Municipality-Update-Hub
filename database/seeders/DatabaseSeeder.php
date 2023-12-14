<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'area_id' => 2,
            'role' => 'barangay_admin',
            'email' => 'badmin@email.com',
            'password' => bcrypt('asdasd')
        ]);
        \App\Models\User::factory()->create([
            'area_id' => 14,
            'role' => 'municipal_admin',
            'email' => 'madmin@email.com',
            'password' => bcrypt('asdasd')
        ]);
        $this->call(BarangaySeeder::class);
    }
}
