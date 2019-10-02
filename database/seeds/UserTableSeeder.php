<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  new App\User([
            'name' => 'Pukar',
            'username' => 'pukar',
            'password' => Hash::make('pukar11'),
            'admin' => true,
        ]);
        $user->save();

        for($i = 1; $i <= 10; $i++)
        {
            $user =  new App\User([
                'name' => 'Pukar',
                'username' => 'pukar'.$i,
                'password' => Hash::make('pukar11'),
                'admin' => true,
            ]);
            $user->save();
        }
    }
}
