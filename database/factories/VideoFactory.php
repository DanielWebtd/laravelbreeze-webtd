<?php

namespace Database\Factories;

use App\Models\Clasificacion;
use App\Models\Pais;
use App\Models\Plataforma;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(10),
            'plataforma_id' => Plataforma::inRandomOrder()->first()->id,
            'pais_id' => Pais::inRandomOrder()->first()->id,
            'publicado' => $this->faker->randomElement([0, 1]),
            'user_id' => User::inRandomOrder()->first()->id,
            'descripcion'=> $this->faker->text
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Video $video) {
            //
        })->afterCreating(function (Video $video) {
            
            /* Numero de clasificaciones que tendra el video. */
            $numClasificaciones = mt_rand(1, 5);

            $clasificaciones = Clasificacion::select('id')
                ->inRandomOrder()
                ->limit($numClasificaciones)
                ->distinct() // para que no haya clasificaciones duplicadas. SELECT DISTINCT
                ->get(); // una coleccion.
            
            foreach ($clasificaciones as $clasificacion) {
                

                DB::table('clasificacion_video')->insert([

                    [
                        'video_id' => $video->id,
                        'clasificacion_id' => $clasificacion->id,
                        'created_at' => now(), // TIMESTAMP formato ISO 
                        'updated_at' => now() // 2022-01-22 13:25:23
                    ],
                ]);
            }
        });
    }
}
