<?php

use App\Models\View;
use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {

        $house_ids = House::all()->pluck('id');

        $views = [
            [
                'ip_visitor' => '152.43.208.255',
                'data' => '2011_02_19',
                'time' => '12:02:50',
                'year' => '2018',
            ],
            [
                'ip_visitor' => '152.41.208.255',
                'data' => '1999-06-09',
                'time' => '12:06:20',
                'year' => '2019',
            ],
            [
                'ip_visitor' => '152.46.208.255',
                'data' => '1994-06-09',
                'time' => '08:06:20',
                'year' => '2022',
            ],
            [
                'ip_visitor' => '152.50.208.255',
                'data' => '1992-04-06',
                'time' => '16:04:20',
                'year' => '2000',
            ],
            [
                'ip_visitor' => '152.80.208.255',
                'data' => '2009-04-06',
                'time' => '20:04:20',
                'year' => '1995',
            ],

        ];

        foreach ($views as $view) {
            View::create($view +[
                'house_id' => $faker->randomElement($house_ids)
            ]);
        }
    }
}
