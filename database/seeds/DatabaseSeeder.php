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
         $this->call(UserSeeder::class);
         $this->call(HouseSeeder::class);
         $this->call(MessageSeeder::class);
         $this->call(PhotoSeeder::class);
         $this->call(SponsorshipSeeder::class);
         $this->call(ServiceSeeder::class);
         $this->call(MessageSeeder::class);
    }
}

