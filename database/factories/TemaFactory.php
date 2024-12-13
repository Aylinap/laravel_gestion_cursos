<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tema>
 */
class TemaFactory extends Factory
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
            'titulo'=> $this->faker->sentence(2),
            'descripcion'=>$this->faker->text(200),
            'documentos' => $this->faker->optional()->sentence,
            'orden' => $this->faker->numberBetween(1, 1000),
            'curso_id' => \App\Models\Curso::factory(),

        ];
    }
}
