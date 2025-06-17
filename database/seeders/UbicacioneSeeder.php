<?php

namespace Database\Seeders;

use App\Models\Ubicacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UbicacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ubicacione::insert([
            [
                'nombre' => 'Bodega',
            ],
            [
                'nombre' => 'Bodega 2',
            ],
            [
                'nombre' => 'Bodega 3',
            ]
        ]);
    }
}
