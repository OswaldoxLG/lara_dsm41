<?php

namespace Database\Seeders;

use App\Models\Cursos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        
        $categorias = ['Programación', 'Diseño Gráfico', 'Marketing', 'Negocios', 'Finanzas'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('curso')->insert([
                'nombre' => $faker->sentence(3),
                'categoria' => $faker->randomElement($categorias),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
