<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {       
        
        // $this->call(GenreSeeder::class);

        $this->call([
            AuthorSeeder::class,
            BindingSeeder::class,
            CategorieSeeder::class,
            FormatSeeder::class,
            GenreSeeder::class,
            LanguageSeeder::class,
            LetterSeeder::class,
            PublisherSeeder::class,            

        ]);

        Books::factory()
            ->count(10)
            ->create();

            
        $this->call([ 
         //   BooksSeeder::class,
            BookAuthorSeeder::class,
            BookCategorieSeeder::class,
            BookGenreSeeder::class,
        ]);
           
    
    }
}
