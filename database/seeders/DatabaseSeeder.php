<?php

namespace Database\Seeders;

use App\Models\Banco;
use App\Models\Clasificacion;
use App\Models\Comentario;
use App\Models\CuentaBancaria;
use App\Models\DetalleVideo;
use App\Models\InformacionContacto;
use App\Models\Pais;
use App\Models\Plataforma;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Desactivar constraint de llaves foraneas. */
        Schema::disableForeignKeyConstraints();
            Pais::truncate();
            Plataforma::truncate();
            Clasificacion::truncate();
            User::truncate();
            Banco::truncate();
            InformacionContacto::truncate();
            Video::truncate();
            Comentario::truncate();
            CuentaBancaria::truncate();
            DetalleVideo::truncate();
            DB::table('clasificacion_video')->truncate();
        Schema::enableForeignKeyConstraints(); // CUIDADO, NO SE OLVIDE ESTA LINEA PARA VOLVER A ACTIVAR LOS CONSTRAINTS DE FKs.

        /* Primero tablas de catalogo (esas que no tienen llaves foraneas) */
        $this->call(PaisSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(ClasificacionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BancoSeeder::class);

        /* Tablas de detalle (esas que tienen llaves foraneas.) */
        $this->call(InformacionContactoSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ComentarioSeeder::class);
        $this->call(CuentaBancariaSeeder::class);
        $this->call(DetalleVideoSeeder::class);
    }
}
