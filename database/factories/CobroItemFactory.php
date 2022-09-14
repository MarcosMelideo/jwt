<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CobroItem>
 */
class CobroItemFactory extends Factory
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
            'id_cobro' => $this->faker->numberBetween($min = 1, $max = 100),
            'actividad_nombre' => $this->faker->name(),
            'actividad_precio' => $this->faker->randomNumber(2),
            'descuento' => $this->faker->numberBetween($min = 1, $max = 100)
        ];
    }
}
