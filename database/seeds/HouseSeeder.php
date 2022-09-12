<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;
use App\Models\House;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['Villetta', 'Appartamento', 'Casa a schiera'];
        $users_ids = User::all()->pluck('id');


<<<<<<< HEAD
        for ($i = 0; $i < 50; $i++) {
=======
        for ($i=0; $i < 50; $i++ ) {
>>>>>>> fde8d662abf4dc901573f38764f7a38ed39ce43b

            $house = new House;

            $house->user_id = $faker->randomElement($users_ids);
            $house->name_house = $faker->titleMale();
            $house->rooms = $faker->numberBetween(0, 10);
            $house->beds = $faker->numberBetween(0, 5);
            $house->bathrooms = $faker->numberBetween(0, 3);
            $house->mq = $faker->numberBetween(50, 150);
            $house->lat = $faker->numberBetween(0, 180);
            $house->lang = $faker->numberBetween(0, 180);
            $house->address = $faker->address();
            $house->type = $faker->randomElement($types);
            $house->save();
        }
    }
}
