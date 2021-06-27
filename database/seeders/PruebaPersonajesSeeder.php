<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaPersonajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Personaje::factory(10)->create();
    }
}
