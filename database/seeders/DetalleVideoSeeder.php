<?php

namespace Database\Seeders;

use App\Models\DetalleVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleVideoSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetalleVideo::factory()->count(500)->create();
    }
}
