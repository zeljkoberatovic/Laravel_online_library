<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book_categories')->insert([
            ['book_id' => 1, 'categorie_id' => 3],
            ['book_id' => 2, 'categorie_id' => 2],
            ['book_id' => 3, 'categorie_id' => 4],
            ['book_id' => 1, 'categorie_id' => 1],
        ]);
    }
}
