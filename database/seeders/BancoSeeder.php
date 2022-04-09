<?php

namespace Database\Seeders;

use App\Models\Banco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BancoSeeder extends Seeder
{
    use WithoutModelEvents; // Laravel 9.

    /* $modeloEloquent->save() */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banco::factory()->count(500)->create();
    }
}
