<?php

namespace Database\Factories;

use App\Models\Authors;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Authors>
 */
class AuthorsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Authors::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_surname' => $this->faker->numerify('Autor-##3'), 
            'photo' => $this->faker->text(30),
            'biography' => $this->faker->paragraph(), 
            'wikipedia' => $this->faker->paragraph(),
        ];
    }
}
