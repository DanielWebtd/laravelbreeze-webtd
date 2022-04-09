<?php

namespace Database\Factories;

use App\Models\Banco;
use illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/* ModeloFactory */
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banco>
 */
class BancoFactory extends Factory
{

    /* si no te hace el binding de tu modelo, añade esta propiedad */
    protected $model = Banco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->unique()->company,
            'siglas' => $this->faker->numberBetween(0, 1) === 0 ? NULL : $this->faker->unique()->passthrough(strtoupper(Str::random(5)))
        ];
    }
}
