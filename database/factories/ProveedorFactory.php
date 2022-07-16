<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_proveedor'=>$this->faker->company(),
            'correo_electronico'=>$this->faker->companyEmail(),
            'numero_telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address(),
            'localidad_oficina_principal'=>$this->faker->country()
        ];
    }
}
