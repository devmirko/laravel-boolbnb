<?php

use Illuminate\Database\Seeder;
use App\Models\Sponsorship;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(UserSeeder::class);
        $this->call(HouseSeeder::class);
=======
         $this->call(UserSeeder::class);
         $this->call(HouseSeeder::class);
         $this->call(SponsorshipSeeder::class);
>>>>>>> 2d860188765e063a99b583f68c0ca1f7247715e6
    }
}
