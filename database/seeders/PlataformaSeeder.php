<?php

namespace Database\Seeders;

use App\Models\Plataforma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlataformaSeeder extends Seeder
{
    use WithoutModelEvents;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plataforma::factory()->count(500)->create();
    }
}
