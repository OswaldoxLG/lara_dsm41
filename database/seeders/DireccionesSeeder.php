<?php

namespace Database\Seeders;

use App\Models\Direcciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $direccion = new Direcciones();

        /*$direccion->calle = 'Calle 1';
        $direccion->numero = '123';
        $direccion->colonia = 'Ciudad 1';
        $direccion->codigo_postal = '12345';

        $direccion->save();
        */
        $direcciones = [
            [
                'calle' => 'Calle 1',
                'numero' => '123',
                'colonia' => 'Ciudad 1',
                'codigo_postal' => '12345',
            ],
            [
                'calle' => 'Calle 2',
                'numero' => '456',
                'colonia' => 'Ciudad 2',
                'codigo_postal' => '67890',
            ],
            [
                'calle' => 'Calle 3',
                'numero' => '789',
                'colonia' => 'Ciudad 3',
                'codigo_postal' => '11223',
            ],
        ];

        DB::table('direcciones')->insert($direcciones);
    }
}
