<?php

use Illuminate\Database\Seeder;

class SingleBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 11; $i++)
        {
            for($j = 1; $j <= 30; $j++)
            {
                $singleBook = new \App\SingleBook([
                    'book_number' => '212' . $i . $j,
                    'student_id' => null,
                    'book_id' => $i,
                ]);

                $singleBook->save();
            }
        }
    }
}
