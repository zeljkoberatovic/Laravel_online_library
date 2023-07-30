<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('letters')->insert([
            ['name' => 'Ćirilica'],
            ['name' => 'Latinica'],
            ['name' => 'Arapsko'],
            ['name' => 'Kinesko'],
        ]);
    }
}
