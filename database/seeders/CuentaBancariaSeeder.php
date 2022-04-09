<?php

namespace Database\Seeders;

use App\Models\CuentaBancaria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuentaBancariaSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CuentaBancaria::factory()->count(500)->create();
    }
}
