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

        // prendo i valori dell elemento 'duration'
        $durationSponsor = Sponsorship::all()->pluck('duration');

        // prendo il giorno odierno
        $giornoOdierno = date("d-m-y");


        if ($durationSponsor == '24 Hours'){
            // se la duration è 24 ore, aggiungo 2 a una variabile
            $date1 = date("Y-m-d", strtotime($giornoOdierno.'+ 1 days'));
        } else if ($durationSponsor == '72 Hours'){
            // se la duration è 72 ore, aggiungo 3 a una variabile
            $date1 = date("Y-m-d", strtotime($giornoOdierno.'+ 2 days'));
        } else {
            // se la duration è 144 ore
            $date1 = date("Y-m-d", strtotime($giornoOdierno.'+ 4 days'));
        }

        // ciclo sulla tabella house
        foreach ($houses as $house) {
            // creo una variabile in cui assegno random gli id della tabella sponsorships
            $houseSponsorships = $faker->randomElements($sponsorships, rand(0, $nSponsorships));
            foreach ($houseSponsorships as $sponsorId) {
                // colleghiamo una serie di id di sponsorships ad un id house
                $house->sponsorships()->attach($sponsorId);
                // collego a ogni id di house e sponsorship il valore di epire
                $house->$date1;
            }
        }

    }
}
