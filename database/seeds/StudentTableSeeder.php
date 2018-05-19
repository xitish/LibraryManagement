<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 10; $x++) {
            $student = new \App\Student([
                'roll_no' => '072BCT'.$x,
                'name' => 'Pukar Ghimire '.$x,
            ]);
            $student->save();
        }
    }
}
