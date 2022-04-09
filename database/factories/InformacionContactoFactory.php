<?php

namespace Database\Factories;

use App\Models\Plataforma;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InformacionContacto>
 */
class InformacionContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* Relacion 1:1. */
        $ids = Plataforma::select('id')->get()->pluck('id');
        return [

            'telefono' => $this->faker->unique()->phoneNumber,
            'email' => $this->faker->unique()->email,
            'plataforma_id' => $this->faker->unique()->randomElement($ids), // MUY IMPORTANTE
        ];
    }
}
