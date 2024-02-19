<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        for($i = 0; $i <= 10; $i++) {
            DB::table('questions')->insert([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'question' => fake()->sentence(10),
                
            ]);
        }

    }
}
