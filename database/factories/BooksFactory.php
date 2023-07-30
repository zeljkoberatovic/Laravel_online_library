<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(15),
            'description' => $this->faker->paragraph(),
            'year' => $this->faker->numberBetween(1980, 2023),
            'page_count' => $this->faker->numberBetween(50, 3000),
            'isbn' => $this->faker->text(20),
            'letter_id' => $this->faker->numberBetween(1, 4), 
            'language_id' => $this->faker->numberBetween(1, 5),
            'binding_id' => $this->faker->numberBetween(1, 2), 
            'format_id' => $this->faker->numberBetween(1, 5),
            'publisher_id' => $this->faker->numberBetween(1, 4),            
            'pdf' => $this->faker->randomElement([0, 1]),
            'img_path' => 'no-image-icon.png',
 
        ];
    }
}
