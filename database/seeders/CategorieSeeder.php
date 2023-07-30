<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Hrana i piće'],
            ['name' => 'Dječje knjige'],
            ['name' => 'Pravo'],
            ['name' => 'Nauka, priroda i matematika'],
            ['name' => 'IT'],

        ]);
    }
}
