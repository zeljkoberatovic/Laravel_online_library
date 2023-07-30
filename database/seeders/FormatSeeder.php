<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formats')->insert([
            ['name' => 'A6'],
            ['name' => 'A5'],
            ['name' => 'A4'],
            ['name' => 'B6'],
            ['name' => 'B5'],
            ['name' => 'B4'],
        ]);
    }
}
