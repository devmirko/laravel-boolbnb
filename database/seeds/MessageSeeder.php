<?php

use App\Models\House;
use App\Models\Message;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        $houses_ids = House::all()->pluck('id');

        for ($i=0; $i < 20 ; $i++ ) {

        $message = new Message;
        $message->house_id = $faker->randomElement($houses_ids);
        $message->contact_name = $faker->word();
        $message->lastname = $faker->word();
        $message->email = $faker->email();
        $message->request_text = $faker->text();

        $message->save();


    }

    }
}
