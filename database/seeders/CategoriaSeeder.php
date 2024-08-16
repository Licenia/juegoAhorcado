<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        //// database/seeders/CategoriaSeeder.php

    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Frutas'],
            ['nombre' => 'Animales'],
            ['nombre' => 'Países'],
        ]);
    }
}



