<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph,
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web', 'Programación', 'Bases de datos']),
            'precio' => $this->faker->randomFloat(2, 50, 500), 
        ];
    }
}
