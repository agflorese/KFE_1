<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Empleado::factory(1000)->create();
    }
}
