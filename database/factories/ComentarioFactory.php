<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'comentario' => $this->faker->sentence(10),
            'video_id' => Video::inRandomOrder()->first()->id,
        ];
    }

    public function publicado()
    {
        return $this->state(function (array $attributes) {
            return [
                'publicado' => 1
            ];
        });
    }

    public function configure()
    {
        return $this->afterMaking(function (Comentario $comentario) {
    
            /* Esto lo hacemos para igualar lo que tiene el video
            como el comentario en la columna "publicado". */
            $videoAsociado = Video::find($comentario->video_id);
            $comentario->publicado = $videoAsociado->publicado;
            $comentario->save();
        })->afterCreating(function (Comentario $comentario) {
            
            $comentario->publicado = 0;
            $comentario->save();
        });
    }
}
