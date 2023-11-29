<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barangay>
 */
class BarangayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // $barangays = [
        //     {
        //         'name' => "Buagsong",
        //         'about' => "lorem ipsum",
        //         "mission"
        //     }
        // ]

        return [
            //
            'name' => $this->faker->name(),
            'about' => $this->faker->name(),
            'mission' => $this->faker->name(),
            'vision' => $this->faker->name(),
            'image' => 'image.png',
            'feastday' => 'january 1, 2000'

        ];
    }
}
