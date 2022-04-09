<?php

namespace Database\Seeders;

use App\Models\InformacionContacto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformacionContactoSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformacionContacto::factory()->count(500)->create();
    }
}
