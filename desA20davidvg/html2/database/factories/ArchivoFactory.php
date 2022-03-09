<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArchivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = Cliente::all();
        return [
            'titulo'=>$this->faker->title(),
            // 'enlace'
            'descripcion'=>$this->faker->text(),
            'cliente_id'=>$this->faker->numberBetween(1, $users->count())
        ];
    }
}
