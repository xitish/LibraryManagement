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
            'book_id' => '34243',
            'name' => 'Neural Networks',
            'author' => 'Thomas Muller',
            'publication' => 'Pearson Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '34244',
            'name' => 'Neural Networks',
            'author' => 'Thomas Muller',
            'publication' => 'Pearson Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '34245',
            'name' => 'Neural Networks',
            'author' => 'Thomas Muller',
            'publication' => 'Pearson Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '44321',
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '44322',
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '44323',
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '44324',
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '36332',
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '36333',
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '36334',
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();

        $book = new \App\Book([
            'book_id' => '36335',
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
        ]);
        $book->save();
    }
}
