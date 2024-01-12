<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'categoria_id' => function () {
                return Categoria::inRandomOrder()->first()->id;
            },
            'nombre' => fake()->word,
            'precio' => fake()->randomFloat(2, 1, 100),
            'stock' => fake()->numberBetween(0, 50),
            'imagen' => fake()->word
        ];

    }
}
