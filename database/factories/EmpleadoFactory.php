<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_empleado'=>$this->faker->name(),
            'correo_electronico'=>$this->faker->freeEmail(),
            'numero_telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address(),
            'fecha_ingreso'=>$this->faker->date()
        ];
    }
}
