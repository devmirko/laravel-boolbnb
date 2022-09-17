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

        $users_ids = User::all()->pluck('id');

        $houses = [
            [
                'name_house' => 'Casetta Blu',
                'rooms' => '6',
                'beds' => '4',
                'bathrooms' => '2',
                'mq' => '73',
                'latitude' => '44.042486',
                'longitude' => '11.045285',
                'address' => 'Via Roma 15',
                'cover_photo' => 'uploads/3ObqUWjn0neP7qDNhn7d9WMfupufr4CktRz1SV2R.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casa dei Monti',
                'rooms' => '4',
                'beds' => '3',
                'bathrooms' => '1',
                'mq' => '45',
                'latitude' => '46.404476',
                'longitude' => '9.478560',
                'address' => 'Via Piave 1/C',
                'cover_photo' => 'uploads/7PxDXKlY5A4h92ME2EolNxaonAMV8kmaYjZJki8i.jpg',
                'type' => 'Villa',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casa Colonica',
                'rooms' => '8',
                'beds' => '5',
                'bathrooms' => '3',
                'mq' => '98',
                'latitude' => '46.425306',
                'longitude' => '10.854597',
                'address' => 'Via Papa Giovanni',
                'cover_photo' => 'uploads/9AvphPypjvrC36ZvrlmNG0XljX6aUS03dHAta3wM.jpg',
                'type' => 'Villetta',
                'visible' => '1'
            ],
            [
                'name_house' => 'Appartamento dei Cieli',
                'rooms' => '2',
                'beds' => '1',
                'bathrooms' => '1',
                'mq' => '35',
                'latitude' => '46.030094',
                'longitude' => '8.989688',
                'address' => 'Via Salvagente 78',
                'cover_photo' => 'uploads/a4z9FaM4zOTK1K5h6A7sYtGoEHlXExPh3J7J3Qqt.jpg',
                'type' => 'Appartamento',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casa dei Lavoratori',
                'rooms' => '7',
                'beds' => '3',
                'bathrooms' => '2',
                'mq' => '81',
                'latitude' => '45.739485',
                'longitude' => '8.423872',
                'address' => 'Via Milano 67',
                'cover_photo' => 'uploads/Bap61eRIZ3eHI2DPydmM8pzutNJQmNLWt4E0nsbs.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casetta degli gnomi',
                'rooms' => '5',
                'beds' => '4',
                'bathrooms' => '2',
                'mq' => '73',
                'latitude' => '45.4877845',
                'longitude' => '11.370955',
                'address' => 'Via Palo 31',
                'cover_photo' => 'uploads/G9bj8sN6W1BB46J78dPYylGtVhNl0seXXSyvFjE7.jpg',
                'type' => 'Villa',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casale Romano',
                'rooms' => '9',
                'beds' => '5',
                'bathrooms' => '3',
                'mq' => '147',
                'latitude' => '45.487806',
                'longitude' => '0.327498',
                'address' => 'Via Sali Bianchi 45',
                'cover_photo' => 'uploads/NWorICqdbzbCu3uKbOtGK8cJL1hwAYbkzhOiHfe0.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Villa Marrini',
                'rooms' => '7',
                'beds' => '4',
                'bathrooms' => '2',
                'mq' => '98',
                'latitude' => '45.316666',
                'longitude' => '8.332651',
                'address' => 'Via Paolo Bianchi 12',
                'cover_photo' => 'uploads/p6PMvRz8RYSMoKMOIHHQxVR3yei3nKEay1aPUcAB.jpg',
                'type' => 'Villa',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casale dei Pini',
                'rooms' => '4',
                'beds' => '3',
                'bathrooms' => '1',
                'mq' => '54',
                'latitude' => '45.754813',
                'longitude' => '7.275039',
                'address' => 'Via Nellini 3',
                'cover_photo' => 'uploads/Sjh0Jdpck3Jw4LODKvyNRYzng4vRMfvwNsIXxKGf.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Appartamento degli Angeli',
                'rooms' => '4',
                'beds' => '2',
                'bathrooms' => '1',
                'mq' => '43',
                'latitude' => '45.051538',
                'longitude' => '8.762568',
                'address' => 'Viale Risorgimento 35',
                'cover_photo' => 'uploads/uCREaXEi9EsgQJizetWm88wW5xmtHPyrBXtjaUkc.jpg',
                'type' => 'Appartamento',
                'visible' => '1'
            ]
        ];



        foreach ($houses as $house) {
            House::create($house +[
                'user_id' => $faker->randomElement($users_ids)
            ]);
        }











        // $types = ['Villetta', 'Appartamento', 'Casa a schiera'];
        // $users_ids = User::all()->pluck('id');



        // for ($i=0; $i < 50; $i++ ) {

        //     $house = new House;

        //     $house->user_id = $faker->randomElement($users_ids);
        //     $house->name_house = $faker->word();
        //     $house->rooms = $faker->numberBetween(1, 10);
        //     $house->beds = $faker->numberBetween(1, 5);
        //     $house->bathrooms = $faker->numberBetween(1, 3);
        //     $house->mq = $faker->numberBetween(50, 150);
        //     $house->latitude = $faker->numberBetween(0, 180);
        //     $house->longitude = $faker->numberBetween(0, 180);
        //     $house->address = $faker->address();
        //     $house->type = $faker->randomElement($types);
        //     $house->save();
        // }
    }
}
