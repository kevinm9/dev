<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Formasdepago;
use App\Models\Producto;
use App\Models\Factura;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'formasdepago_id' => function () {
                return Formasdepago::inRandomOrder()->first()->id;
            },
            'cliente_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'total' => fake()->randomFloat(2, 1, 1000),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Factura $factura) {
            // ...
        })->afterCreating(function (Factura $factura) {
            $productos = Producto::inRandomOrder()->limit(3)->get(); // Obtener 3 productos aleatorios
            foreach ($productos as $producto) {
                $factura->productos()->attach([
                    $producto["id"] => ['cantidad' => fake()->numberBetween(1, 5), 'created_at' => now(), 'updated_at' => now()]
                ]);
            }
        });
    }
    
}
