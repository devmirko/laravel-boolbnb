<?php

use Illuminate\Database\Seeder;
use App\Models\Sponsorship;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'plan' => 'Basic',
                'price' => '2.99',
                'duration' => '24 Hours'
            ],

            [
                'plan' => 'Standard',
                'price' => '5.99',
                'duration' => '72 Hours'
            ],

            [
                'plan' => 'Premium',
                'price' => '9.99',
                'duration' => '144 hours'
            ]
        ];

        foreach ($plans as $plan) {
            Sponsorship::create($plan);
        }
    }
}
