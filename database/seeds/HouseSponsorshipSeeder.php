<?php

use App\Models\House;
use App\Models\Sponsorship;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HouseSponsorshipSeeder extends Seeder
{
    public function run( Faker $faker )
    {
        // prendo tutti i campi id della tabella house
        $houses = House::all()->pluck('id');;

        // prendo tutti i campi id della tabella sponsorships
        $sponsorships = Sponsorship::all()->pluck('id');

        // creo una variabile in cui conto gli elementi(id) di sponsorships
        $nSponsorships = count($sponsorships);

        // ciclo sulla tabella house
        foreach ($houses as $house) {
            // creo una variabile in cui assegno random gli id della tabella sponsorships
            $houseSponsorships = $faker->randomElements($sponsorships, rand(0, $nSponsorships));
            foreach ($houseSponsorships as $sponsorId) {
                // colleghiamo una serie di id di sponsorships ad un id house
                $house->sponsorships()->attach($sponsorId);
            }
        }

    }
}
