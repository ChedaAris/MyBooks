<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'description' => 'A young boy discovers he is a wizard and attends Hogwarts School of Witchcraft and Wizardry.',
            'pages' => 223,
            'author_id' => 1,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => '1984',
            'description' => 'A dystopian novel set in a totalitarian regime led by Big Brother.',
            'pages' => 328,
            'author_id' => 2,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'The Hobbit',
            'description' => 'The adventure of Bilbo Baggins as he goes on a quest to help a group of dwarves reclaim their homeland.',
            'pages' => 310,
            'author_id' => 3,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'I, Robot',
            'description' => 'A collection of short stories that explore the ethical implications of robotics and artificial intelligence.',
            'pages' => 256,
            'author_id' => 4,
            'category_id' => 2,
        ]);
    }
}
