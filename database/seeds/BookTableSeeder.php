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
            'name' => 'Neural Networks',
            'author' => 'Thomas Muller',
            'publication' => 'Pearson Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Neural Networks',
            'author' => 'Thomas Muller',
            'publication' => 'Pearson Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Neural Networks',
            'author' => 'Thomas Muller',
            'publication' => 'Pearson Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Operating System',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();

        $book = new \App\Book([
            'name' => 'Object Oriented Analysis And Design',
            'author' => 'Hector B',
            'publication' => 'Nepal Publication',
            'description' => 'Lorem Ipsum random text',
        ]);
        $book->save();
    }
}
