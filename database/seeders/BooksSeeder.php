<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'The Clean Architecture in PHP'],
            ['description' => "Figuring out how to architect a brand new application is a big deal. Doing it the wrong way
                can lead to a huge headache later. Testing can become hard or maybe even impossible and
                refactoring is an absolute nightmare."
            ],
            ['page_count' => 251],
            ['isbn' => 'Nauka, priroda i matematika'],
            ['year' => 2015],
            ['pdf' => '0'],
            ['img_path' => 'The Clean Architecture in PHP.jpg'],
            ['letter_id' => 2],
            ['format_id' => 2],
            ['language_id' => 2],
            ['binding_id' => 2],
            ['publisher_id' => 3],

        ]);
    }
}
