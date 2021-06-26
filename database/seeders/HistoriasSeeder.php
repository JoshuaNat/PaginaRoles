<?php

namespace Database\Seeders;

use App\Models\Historia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("historias")->insert([
            'Nombre' => 'A Hero Emerges',
            'Descripcion' => 'Un rol sobre estudiantes con superpoderes',
            'Genero' => 'SuperHeroes',
            'Estado' => 'TBA'
        ]);

        DB::table("historias")->insert([
            'Nombre' => 'Date At School',
            'Descripcion' => 'Una comedia romantica en la universidad',
            'Genero' => 'Comedia',
            'Estado' => 'Activo'
        ]);

        Historia::create([
            'Nombre' => 'Celtidrom Kingdoms: Chaorruption',
            'Descripcion' => 'Bandidos y Heroes se unen para salvar el reino',
            'Genero' => 'Fantasia',
            'Estado' => 'Activo'
        ]);
    }
}
