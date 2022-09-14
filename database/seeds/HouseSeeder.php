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
                'lat' => '44.042486',
                'lang' => '11.045285',
                'address' => 'Via Roma 15',
                'cover_photo' => 'https://www.bautrust.ch/wp-content/uploads/ampliamento-casa-2.png',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casa dei Monti',
                'rooms' => '4',
                'beds' => '3',
                'bathrooms' => '1',
                'mq' => '45',
                'lat' => '46.404476',
                'lang' => '9.478560',
                'address' => 'Via Piave 1/C',
                'cover_photo' => 'https://www.mioassicuratore.it/doc-news/656/400/casa-in-legno-assicurazione-costi-coperture.jpg',
                'type' => 'Villa',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casa Colonica',
                'rooms' => '8',
                'beds' => '5',
                'bathrooms' => '3',
                'mq' => '98',
                'lat' => '46.425306',
                'lang' => '10.854597',
                'address' => 'Via Papa Giovanni',
                'cover_photo' => 'https://media.vrbo.com/lodging/34000000/34000000/33997900/33997897/7a53f6a8.f6.jpg',
                'type' => 'Villetta',
                'visible' => '1'
            ],
            [
                'name_house' => 'Appartamento dei Cieli',
                'rooms' => '2',
                'beds' => '1',
                'bathrooms' => '1',
                'mq' => '35',
                'lat' => '46.030094',
                'lang' => '8.989688',
                'address' => 'Via Salvagente 78',
                'cover_photo' => 'https://imgs.nestimg.com/villetta_a_schiera_in_vendita_san_marcello_piteglio_pt_8530022653040922951.jpg',
                'type' => 'Appartamento',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casa dei Lavoratori',
                'rooms' => '7',
                'beds' => '3',
                'bathrooms' => '2',
                'mq' => '81',
                'lat' => '45.739485',
                'lang' => '8.423872',
                'address' => 'Via Milano 67',
                'cover_photo' => 'https://www.fontane-bianche.it/wp-content/uploads/2022/06/IM222206_00-400x300.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casetta degli gnomi',
                'rooms' => '5',
                'beds' => '4',
                'bathrooms' => '2',
                'mq' => '73',
                'lat' => '45.4877845',
                'lang' => '11.370955',
                'address' => 'Via Palo 31',
                'cover_photo' => 'https://www.casecerco.it/media/img/400/2022/08/2541910.jpg',
                'type' => 'Villa',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casale Romano',
                'rooms' => '9',
                'beds' => '5',
                'bathrooms' => '3',
                'mq' => '147',
                'lat' => '45.487806',
                'lang' => '0.327498',
                'address' => 'Via Sali Bianchi 45',
                'cover_photo' => 'http://www.vpimmobiliare.it/wp-content/uploads/2022/01/271718916_266632808892760_7571006168343598235_n-400x300.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Villa Marrini',
                'rooms' => '7',
                'beds' => '4',
                'bathrooms' => '2',
                'mq' => '98',
                'lat' => '45.316666',
                'lang' => '8.332651',
                'address' => 'Via Paolo Bianchi 12',
                'cover_photo' => 'https://www.immobiliarecittaideale.com/upload/img/immobili/lesa-casa-indipendente-4-camere-giardino-terrazzo-57514s.jpeg',
                'type' => 'Villa',
                'visible' => '1'
            ],
            [
                'name_house' => 'Casale dei Pini',
                'rooms' => '4',
                'beds' => '3',
                'bathrooms' => '1',
                'mq' => '54',
                'lat' => '45.754813',
                'lang' => '7.275039',
                'address' => 'Via Nellini 3',
                'cover_photo' => 'https://www.monicabrunirealestate.com/site/wp-content/uploads/2021/04/IMG_7691-400x300.jpg',
                'type' => 'Villetta a schiera',
                'visible' => '1'
            ],
            [
                'name_house' => 'Appartamento degli Angeli',
                'rooms' => '4',
                'beds' => '2',
                'bathrooms' => '1',
                'mq' => '43',
                'lat' => '45.051538',
                'lang' => '8.762568',
                'address' => 'Viale Risorgimento 35',
                'cover_photo' => 'https://media.vrbo.com/lodging/40000000/39440000/39431900/39431844/d0076d05.f6.jpg',
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
        //     $house->lat = $faker->numberBetween(0, 180);
        //     $house->lang = $faker->numberBetween(0, 180);
        //     $house->address = $faker->address();
        //     $house->type = $faker->randomElement($types);
        //     $house->save();
        // }
    }
}
