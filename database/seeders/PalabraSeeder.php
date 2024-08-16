<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PalabraSeeder extends Seeder
{
    public function run()
    {
        DB::table('palabras')->insert([
            ['categoria_id' => 1, 'palabra' => 'MANZANA'],
            ['categoria_id' => 1, 'palabra' => 'BANANA'],
            ['categoria_id' => 2, 'palabra' => 'PERRO'],
            ['categoria_id' => 2, 'palabra' => 'GATO'],
            ['categoria_id' => 3, 'palabra' => 'ARGENTINA'],
            ['categoria_id' => 3, 'palabra' => 'BRASIL'],
        ]);
    }
}
