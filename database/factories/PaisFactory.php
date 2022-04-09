<?php

namespace Database\Factories;

use illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pais>
 */
class PaisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais' => $this->faker->unique()->country,
            'codigo' => $this->faker->numberBetween(0, 1) === 0 ? NULL : $this->faker->unique()->passthrough(Str::random(10))
        ];
    }
}
