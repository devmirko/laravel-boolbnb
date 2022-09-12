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
                'name'      => 'Claudio Varrosi',
                'email'     => 'claudiovarrosi@gmail.com',
                'password'  => Hash::make('ClaudioVarrosi'),
            ],
            [
                'name'      => 'Francesco Lepore',
                'email'     => 'francescolepore@gmail.com',
                'password'  => Hash::make('FrancescoLepore'),
            ],
            [
                'name'      => 'Marco Amico',
                'email'     => 'marcoamico@gmail.com',
                'password'  => Hash::make('MarcoAmico'),
            ],
            [
                'name'      => 'Omar Buzzoni',
                'email'     => 'omarbuzzoni@gmail.com',
                'password'  => Hash::make('OmarBuzzoni'),
            ],
            [
                'name'      => 'Mirko Simonetti',
                'email'     => 'mirkosimonetti@gmail.com',
                'password'  => Hash::make('MirkoSimonetti'),
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
