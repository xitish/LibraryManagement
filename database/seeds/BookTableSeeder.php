<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Book([
            'book_id' => '34223',
            'name' => 'Artificial Intelligence',
            'author' => 'Pukar Ghimire',
            'publication' => 'McGra Hill Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '44321',
            'name' => 'Operating System',
            'author' => 'Andrew S',
            'publication' => 'PHI Publication',
        ]);
        $book->save();
    }
}
