<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documento::insert([
            [
                'nombre' => 'DUI',
            ],
            [
                'nombre' => 'NIT',
            ],
            [
                'nombre' => 'PASAPORTE',
            ],
        ]);
    }
}
