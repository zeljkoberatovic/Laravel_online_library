<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name_surname' => 'Marko Marković',
             'photo' => null,
             'biography' => 'bbbb1111',
             'wikipedia' => 'wwww1111',
            ],
            ['name_surname' => 'Ivana Ilić',
            'photo' => null,
             'biography' => 'bbb222',
             'wikipedia' => 'wwww222',
            ],
            ['name_surname' => 'Jovana Perić',
             'photo' => null,
             'biography' => 'bbb333',
             'wikipedia' => 'wwww333',
            ],
            ['name_surname' => 'Petar Porobić',
             'photo' => null,
             'biography' => 'bbb444',
             'wikipedia' => 'wwww444',
            ],
            ['name_surname' => 'Mirjana Antić',
             'photo' => null,
             'biography' => 'bbb555',
             'wikipedia' => 'wwww555',
            ]
            
        ]);
    }
}
