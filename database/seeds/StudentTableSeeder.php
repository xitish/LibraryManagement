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
        for ($x = 2; $x <= 11; $x++) {
            $student = new \App\Student([
                'name' => 'Student No '.$x,
                'rollyear' => '072',
                'rollfaculty' => 'BCT',
                'rollno' => '0'.$x,
                'user_id' => $x,
            ]);
            $student->save();
        }
    }
}
