<?php

use App\Models\House;
use App\Models\Photo;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $arrHouseId = House::all()->pluck('id');

        $arrHouse = [
            [

                'url' => 'https://i.imgur.com/xbAssQa.jpg'

            ],

            [

                'url' => 'https://i.imgur.com/2pFZMfR.jpg'

            ],

            [

                'url' => 'https://i.imgur.com/zsugY8Z.jpg'

            ],

            [

                'url' => 'https://i.imgur.com/tcZGxPe.jpg'

            ],

            [

                'url' => 'https://i.imgur.com/8N4XGlg.jpg'

            ],


           ];

           foreach ( $arrHouse as  $house ) {
            Photo::create($house +[
                'house_id' => $faker->randomElement($arrHouseId)
            ]);
           }



    }
}
