<?php

namespace Database\Factories;

use illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clasificacion>
 */
class ClasificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clasificacion' => $this->faker->unique()->passthrough(strtoupper(Str::random(5))),
            'descripcion' => $this->faker->text
        ];
    }
}
