<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $barangays = [
            [
                "name" => "Poblacion",
                "official_seal" => "cordova-seal.png",
                "about" => "Poblacion is the central and oldest barangay in Cordova, Cebu.",
                "mission" => "To promote community welfare and development through various programs and initiatives.",
                "vision" => "To become a model barangay in terms of progress and unity.",
                "image" => "poblacion.jpg",
                "feastday" => "2023-01-15"
            ],
            [
                "name" => "Day-as",
                "official_seal" => "cordova-seal.png",
                "about" => "Day-as is known for its scenic coastal areas and rich cultural heritage.",
                "mission" => "To preserve and promote local traditions while embracing modern development.",
                "vision" => "To be an eco-friendly barangay known for its sustainable practices.",
                "image" => "day-as.jpg",
                "feastday" => "2023-03-20"
            ],
            [
                "name" => "Catarman",
                "official_seal" => "cordova-seal.png",
                "about" => "Catarman is a barangay famous for its beautiful beaches and vibrant community.",
                "mission" => "To provide a conducive environment for growth and progress.",
                "vision" => "To be a leading example of a united and prosperous barangay.",
                "image" => "catarman.jpg",
                "feastday" => "2023-05-12"
            ],
            [
                "name" => "Ibabao",
                "official_seal" => "cordova-seal.png",
                "about" => "Ibabao is an inland barangay known for its agricultural activities and friendly residents.",
                "mission" => "To enhance agricultural practices and uplift the livelihoods of locals.",
                "vision" => "To become a self-sustaining barangay fostering growth and prosperity.",
                "image" => "ibabao.jpg",
                "feastday" => "2023-07-08"
            ],
            // Information for the remaining barangays...
            [
                "name" => "San Miguel",
                "official_seal" => "cordova-seal.png",
                "about" => "San Miguel is a barangay known for its strong sense of community and cultural celebrations.",
                "mission" => "To promote unity and cooperation among residents for collective progress.",
                "vision" => "To be a culturally rich and harmonious barangay.",
                "image" => "san-miguel.jpg",
                "feastday" => "2023-09-29"
            ],
            [
                "name" => "Alegria",
                "official_seal" => "cordova-seal.png",
                "about" => "Alegria is a barangay with diverse natural landscapes and friendly locals.",
                "mission" => "To preserve and protect the natural beauty of the barangay while supporting local initiatives.",
                "vision" => "To be a prime destination for eco-tourism and sustainable living.",
                "image" => "alegria.jpg",
                "feastday" => "2023-11-15"
            ],
            [
                "name" => "Gabi",
                "official_seal" => "cordova-seal.png",
                "about" => "Gabi is a barangay known for its vibrant festivals and active youth involvement.",
                "mission" => "To nurture and empower the youth for community development.",
                "vision" => "To be a hub of youth engagement and cultural festivities.",
                "image" => "gabi.jpg",
                "feastday" => "2023-12-18"
            ],
            [
                "name" => "Pilipog",
                "official_seal" => "cordova-seal.png",
                "about" => "Pilipog is an emerging barangay with a focus on education and sustainable growth.",
                "mission" => "To provide quality education and opportunities for the youth.",
                "vision" => "To be a progressive barangay with a strong educational foundation.",
                "image" => "pilipog.jpg",
                "feastday" => "2024-02-05"
            ],
            [
                "name" => "Cogon",
                "official_seal" => "cordova-seal.png",
                "about" => "Cogon is a barangay known for its agricultural heritage and scenic landscapes.",
                "mission" => "To enhance agricultural productivity while preserving natural resources.",
                "vision" => "To be a thriving agricultural community with sustainable practices.",
                "image" => "cogon.jpg",
                "feastday" => "2024-04-10"
            ],
            [
                "name" => "Buagsong",
                "official_seal" => "cordova-seal.png",
                "about" => "Buagsong is a barangay with a rich history and strong cultural traditions.",
                "mission" => "To preserve and promote cultural heritage for future generations.",
                "vision" => "To be a cultural landmark preserving the legacy of the past.",
                "image" => "buagsong.jpg",
                "feastday" => "2024-06-30"
            ],
            [
                "name" => "Bangbang",
                "official_seal" => "cordova-seal.png",
                "about" => "Bangbang is a barangay known for its scenic views and agricultural activities.",
                "mission" => "To promote sustainable agriculture and environmental conservation.",
                "vision" => "To be an eco-friendly barangay with breathtaking landscapes.",
                "image" => "bangbang.jpg",
                "feastday" => "2024-08-22"
            ],
            [
                "name" => "Gilutongan",
                "official_seal" => "cordova-seal.png",
                "about" => "Gilutongan is a barangay with a blend of urban and rural characteristics.",
                "mission" => "To create a harmonious balance between urban development and rural preservation.",
                "vision" => "To be a modern barangay preserving its rural essence.",
                "image" => "gilutongan.jpg",
                "feastday" => "2024-10-05"
            ],
            [
                "name" => "Dapitan",
                "official_seal" => "cordova-seal.png",
                "about" => "Dapitan is a barangay known for its religious celebrations and friendly atmosphere.",
                "mission" => "To promote spirituality and community engagement.",
                "vision" => "To be a beacon of faith and camaraderie.",
                "image" => "dapitan.jpg",
                "feastday" => "2024-12-07"
            ],
            [
                "name" => "Cordova Municipality",
                "official_seal" => "cordova-seal.png",
                "about" => "Cordova is a picturesque municipality located on Mactan Island in the Philippines. Its history is deeply intertwined with the rich heritage of Mactan and the broader story of the nation. Before the arrival of Spanish colonizers in the 16th century, Mactan Island, including Cordova, was home to Cebuano-speaking indigenous people. It is renowned for the Battle of Mactan in
                1521 when Lapu-Lapu, the local chieftain, successfully resisted Ferdinand Magellan's attempt to conquer the island. During the Spanish colonization, Cordova, like many other places in the Philippines, was brought under Spanish rule. It underwent significant changes as the Spaniards established settlements and introduced Christianity. The municipality has since evolved, reflecting a blend of indigenous roots and influences from colonial history. Today, Cordova stands as a testament to the enduring cultural heritage of the Philippines.",
                "mission" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos laborum labore veritatis! Ipsa dignissimos totam laudantium quam quasi incidunt ut minima labore omnis fugiat dolorem soluta, vitae accusamus cupiditate animi!",
                "vision" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi nostrum dignissimos sint odit quibusdam quas accusantium molestiae! Dolorum, animi sint odio provident ipsum perspiciatis corporis!",
                "image" => "cordova-church.jpg",
                "feastday" => "2023-01-15"
            ],
        ];
        
        foreach($barangays as $barangay) {
            DB::table('barangays')->insert($barangay);
        }
    }
}
