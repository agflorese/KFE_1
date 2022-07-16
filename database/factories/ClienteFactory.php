<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_cliente'=>$this->faker->name(),
            'correo_electronico'=>$this->faker->freeEmail(),
            'numero_telefono'=>$this->faker->phoneNumber(),
            'fecha_ingreso'=>$this->faker->date()
        ];
    }
}
