<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'id_cliente' => $this->faker->numberBetween($min = 1, $max = 50),
            'fecha' => $this->faker->date()
        ];
    }
}
