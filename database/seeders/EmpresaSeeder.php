<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::insert([
            'nombre' => 'El Buen Amigo',
            'propietario' => 'Gabino Salgado',
            'nit' => '',
            'porcentaje_impuesto' => '0',
            'abreviatura_impuesto' => 'IVA',
            'direccion' => 'Ciudad Barrios, La Caridad',
            'moneda_id' => 1
        ]);
    }
}
