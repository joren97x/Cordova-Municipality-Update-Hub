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

        $barangays = [
            [
                "name" => "Poblacion",
                "about" => "Poblacion is the central and oldest barangay in Cordova, Cebu.",
                "mission" => "To promote community welfare and development through various programs and initiatives.",
                "vision" => "To become a model barangay in terms of progress and unity.",
                "image" => "poblacion_image.jpg",
                "feastday" => "2023-01-15"
            ],
            [
                "name" => "Day-as",
                "about" => "Day-as is known for its scenic coastal areas and rich cultural heritage.",
                "mission" => "To preserve and promote local traditions while embracing modern development.",
                "vision" => "To be an eco-friendly barangay known for its sustainable practices.",
                "image" => "dayas_image.jpg",
                "feastday" => "2023-03-20"
            ],
            [
                "name" => "Catarman",
                "about" => "Catarman is a barangay famous for its beautiful beaches and vibrant community.",
                "mission" => "To provide a conducive environment for growth and progress.",
                "vision" => "To be a leading example of a united and prosperous barangay.",
                "image" => "catarman_image.jpg",
                "feastday" => "2023-05-12"
            ],
            [
                "name" => "Ibabao",
                "about" => "Ibabao is an inland barangay known for its agricultural activities and friendly residents.",
                "mission" => "To enhance agricultural practices and uplift the livelihoods of locals.",
                "vision" => "To become a self-sustaining barangay fostering growth and prosperity.",
                "image" => "ibabao_image.jpg",
                "feastday" => "2023-07-08"
            ],
            // Information for the remaining barangays...
            [
                "name" => "San Miguel",
                "about" => "San Miguel is a barangay known for its strong sense of community and cultural celebrations.",
                "mission" => "To promote unity and cooperation among residents for collective progress.",
                "vision" => "To be a culturally rich and harmonious barangay.",
                "image" => "sanmiguel_image.jpg",
                "feastday" => "2023-09-29"
            ],
            [
                "name" => "Alegria",
                "about" => "Alegria is a barangay with diverse natural landscapes and friendly locals.",
                "mission" => "To preserve and protect the natural beauty of the barangay while supporting local initiatives.",
                "vision" => "To be a prime destination for eco-tourism and sustainable living.",
                "image" => "alegria_image.jpg",
                "feastday" => "2023-11-15"
            ],
            [
                "name" => "Gabi",
                "about" => "Gabi is a barangay known for its vibrant festivals and active youth involvement.",
                "mission" => "To nurture and empower the youth for community development.",
                "vision" => "To be a hub of youth engagement and cultural festivities.",
                "image" => "Gabi_image.jpg",
                "feastday" => "2023-12-18"
            ],
            [
                "name" => "Pilipog",
                "about" => "Pilipog is an emerging barangay with a focus on education and sustainable growth.",
                "mission" => "To provide quality education and opportunities for the youth.",
                "vision" => "To be a progressive barangay with a strong educational foundation.",
                "image" => "pilipog_image.jpg",
                "feastday" => "2024-02-05"
            ],
            [
                "name" => "Cogon",
                "about" => "Cogon is a barangay known for its agricultural heritage and scenic landscapes.",
                "mission" => "To enhance agricultural productivity while preserving natural resources.",
                "vision" => "To be a thriving agricultural community with sustainable practices.",
                "image" => "cogon_image.jpg",
                "feastday" => "2024-04-10"
            ],
            [
                "name" => "Buagsong",
                "about" => "Pasil is a barangay with a rich history and strong cultural traditions.",
                "mission" => "To preserve and promote cultural heritage for future generations.",
                "vision" => "To be a cultural landmark preserving the legacy of the past.",
                "image" => "pasil_image.jpg",
                "feastday" => "2024-06-30"
            ],
            [
                "name" => "Bangbang",
                "about" => "Bangbang is a barangay known for its scenic views and agricultural activities.",
                "mission" => "To promote sustainable agriculture and environmental conservation.",
                "vision" => "To be an eco-friendly barangay with breathtaking landscapes.",
                "image" => "bangbang_image.jpg",
                "feastday" => "2024-08-22"
            ],
            [
                "name" => "Gilutongan",
                "about" => "San Antonio is a barangay with a blend of urban and rural characteristics.",
                "mission" => "To create a harmonious balance between urban development and rural preservation.",
                "vision" => "To be a modern barangay preserving its rural essence.",
                "image" => "sanantonio_image.jpg",
                "feastday" => "2024-10-05"
            ],
            [
                "name" => "Dapitan",
                "about" => "Dapitan is a barangay known for its religious celebrations and friendly atmosphere.",
                "mission" => "To promote spirituality and community engagement.",
                "vision" => "To be a beacon of faith and camaraderie.",
                "image" => "dapitan_image.jpg",
                "feastday" => "2024-12-07"
            ],
        ];
        

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
