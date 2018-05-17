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
        ]);
        $user->save();
    }
}
