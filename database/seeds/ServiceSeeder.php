<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{

    public function run()
    {
        $services = [
            // ['name_services' => 'Nessun servizio'],
            ['name_services' => 'Wi-fi'],
            ['name_services' => 'Cucina'],
            ['name_services' => 'Lavatrice'],
            ['name_services' => 'Asciugatrice'],
            ['name_services' => 'Aria Condizionata'],
            ['name_services' => 'Riscaldamento'],
            ['name_services' => 'TV'],
            ['name_services' => 'Spazio di lavoro dedicato'],
            ['name_services' => 'Asciugacapelli'],
            ['name_services' => 'Ferro da stiro'],
            ['name_services' => 'Piscina'],
            ['name_services' => 'Idromassaggio'],
            ['name_services' => 'Parcheggio gratuito'],
            ['name_services' => 'Postazione di ricarica per veicoli elettrici'],
            ['name_services' => 'Culla'],
            ['name_services' => 'Palestra'],
            ['name_services' => 'Griglia per barbecue'],
            ['name_services' => 'Colazione'],
            ['name_services' => 'Camino'],
            ['name_services' => 'Permesso Fumatori'],
            ['name_services' => 'Lungo la Spiaggia'],
            ['name_services' => 'Lungo la riva'],
            ['name_services' => 'Allarme antincendio'],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
