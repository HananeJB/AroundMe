<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class create_listings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date=date('Y-m-d H:i:s');
        DB::table('listings')->insert([
            'listing_title'=>'Bondi Coffee Kitchen',
            'keywords'=>'café ,nourriture fraîche ,ambiance amicale, Menu, parking, nourriture',
            'category'=>'manger & boire',
            'tags'=>'cafe',
            'listing_tags'=>'featured',
            'city'=>'casablanca',
            'address'=>'31 Rue Sebou Gauthier, Casablanca 20600 Maroc',
            'latitude'=>'33.589876',
            'longitude'=>'-7.631548',
            'logo'=>'/images/cafe/bondi/logo.png',
            'cover'=>'/images/cafe/bondi/photo0.jpg',
            'gallery'=>'/images/cafe/bondi/photo0.jpg, /cafe/bondi/photo1.jpg, /cafe/bondi/photo2.jpg',
            'name'=>'Justina',
            'email'=>'justina@bondicoffeektchen.com',
            'title'=>'bondicoffeekitchen',
            'tagline'=>'café ,nourriture fraîche ,ambiance amicale, Menu, parking, nourriture',
            'description'=>"<p>Bondi Coffee Kitchen est un concept de cuisine et de café de style australien au cœur de Casablanca, apportant une expérience culinaire moderne au Maroc.<br> Bondi Coffee Kitchen est un concept de boutique de restauration et de café lancé en 2015 par un couple maroco-australien qui s'est rencontré à Shanghai et a vécu dans des villes du monde entier. <br>Notre mission est de vous offrir un environnement propre et détendu où vous vous sentirez chez vous ou n'importe où dans le monde.</p>",
            'phone'=>'0651-687707',
            'monday_open'=>'9 AM',
            'monday_closed'=>'9 PM',
            'Tuesday_open'=>'9 AM',
            'Tuesday_closed'=>'9 PM',
            'Wednesday_open'=>'9 AM',
            'Wednesday_closed'=>'9 PM',
            'Thursday_open'=>'9 AM',
            'Thursday_closed'=>'9 PM',
            'Friday_open'=>'9 AM',
            'Friday_closed'=>'9 PM',
            'Saturday_open'=>'9 AM',
            'Saturday_closed'=>'9 PM',
            'Sunday_open'=>'9 AM',
            'Sunday_closed'=>'9 PM',
            'price'=>'20 MAD - 100 MAD',
            'features'=>'Climatisé ,Café bio équitable, Salades fraîches et saines, Délicieux sandwichs, Plats de pâtes copieux, Savoureuses douceurs maison',
            'status'=>'Open Now',
            'created_at'=>$date,
        ]);
    }
}
