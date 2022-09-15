<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\House;
use App\Models\Service;

class HouseServiceSeeder extends Seeder
{
    public function run( Faker $faker )
    {
        // prendo tutti i dati della tabella house
        $houses = House::all();
        // prendo tutti i campi id della tabella service
        $services = Service::all()->pluck('id');
        // creo una variabile in cui conto gli elementi(id) di service
        $nServices = count($services);

        // ciclo sulla tabella house
        foreach ($houses as $house) {
            // creo una variabile in cui assegno random gli id della tabella services
            $houseServices = $faker->randomElements($services, rand(0, $nServices));
            foreach ($houseServices as $serviceId) {
                // colleghiamo una serie di id di service ad un id house
                $house->services()->attach($serviceId);
            }
        }

    }
}
