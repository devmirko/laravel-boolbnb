 <?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users = [
            [
                'name'      => 'Claudio',
                'surname'   => 'Varrosi',
                'email'     => 'claudiovarrosi@gmail.com',
                'password'  => Hash::make('ClaudioVarrosi'),
                'phone'     => '3817654321',
            ],
            [
                'name'      => 'Francesco',
                'surname'   => 'Lepore',
                'email'     => 'francescolepore@gmail.com',
                'password'  => Hash::make('FrancescoLepore'),
                'phone'     => '3817659321',
            ],
            [
                'name'      => 'Marco',
                'surname'   => 'Amico',
                'email'     => 'marcoamico@gmail.com',
                'password'  => Hash::make('MarcoAmico'),
                'phone'     => '3207859321',
            ],
            [
                'name'      => 'Omar',
                'surname'   => 'Buzzoni',
                'email'     => 'omarbuzzoni@gmail.com',
                'password'  => Hash::make('OmarBuzzoni'),
                'phone'     => '3107859321',
            ],
            [
                'name'      => 'Mirko',
                'surname'   => 'Simonetti',
                'email'     => 'mirkosimonetti@gmail.com',
                'password'  => Hash::make('MirkoSimonetti'),
                'phone'     => '3707859321',
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
