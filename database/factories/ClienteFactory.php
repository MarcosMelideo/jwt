<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
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
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'dni' => $this->faker->dni(),
            'email' => $this->faker->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),      
            'direccion' => $this->faker->address(),
            'fecha_inscripcion' => $this->faker->date()
        ];
    }
    

}