<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
             $imagePath = public_path('images/banner');
            $images = glob($imagePath . '/*.{jpg,png,gif}', GLOB_BRACE);
            
        for($i = 0; $i < 20; $i++) {
            
            DB::table('posts')->insert([
                'barangay_id' => fake()->numberBetween(1,14),
                'banner' =>  str_replace($imagePath . '/', '', fake()->randomElement($images)),
                'area_type' => fake()->randomElement(['barangay', 'municipality', 'barangay']),
                'category' => fake()->randomElement(['Events', 'Sports', 'Health and wellness', 'Local news']),
                'title' => fake()->sentence(2),
                'status' => fake()->randomElement(['approved', 'pending']),
                'description' => fake()->sentence(20)
            ]);
        }

    }
}
