<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'birthday' => '1965-07-31',
        ]);

        Author::create([
            'name' => 'George Orwell',
            'birthday' => '1903-06-25',
        ]);

        Author::create([
            'name' => 'J.R.R. Tolkien',
            'birthday' => '1892-01-03',
        ]);

        Author::create([
            'name' => 'Isaac Asimov',
            'birthday' => '1920-01-02',
        ]);
    }
}
