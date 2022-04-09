<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleVideo>
 */
class DetalleVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* Relacion 1:1. */
        $ids = Video::select('id')->get()->pluck('id');
        
        return [
            'duracion' => $this->faker->numberBetween(0, 1) === 0 ? NULL : $this->faker->time, // 00:12:59
            'fecha_publicacion' => $this->faker->date . ' ' . $this->faker->time, // 2021-11-10 00:12:59 => formato ISO
            'extension' => $this->faker->randomElement(['.mp4', '.mov', '.wmv']),
            'dimensiones' => $this->faker->numberBetween(0, 1) === 0 ? NULL : $this->faker->randomNumber . 'x' . $this->faker->randomNumber, // 1920x1080
            'video_id' => $this->faker->unique()->randomElement($ids), // MUY IMPORTANTE
            'cantidad_visitas' => $this->faker->randomNumber,
            'ganancia_generada' => $this->faker->randomFloat(4)
        ];
    }

    public function fullHD()
    {
        return $this->state(function (array $attributes) {
            return [
                'dimensiones' => '1920x1080',
            ];
        });
    }

    public function mp4()
    {
        return $this->state(function (array $attributes) {
            return [
                'extension' => '.mp4'
            ];
        });
    }
}
