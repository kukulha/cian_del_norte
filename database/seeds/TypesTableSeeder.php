<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
        	'name' => 'Tracto Camión',
        	'slug' => 'tracto-camion',
        ]);

        Type::create([
        	'name' => 'Camioneta 3.5 Toneladas',
        	'slug' => 'camioneta-3-5-toneladas',
        ]);

        Type::create([
        	'name' => 'Bajo Perfil',
        	'slug' => 'bajo-perfil',
        ]);

        Type::create([
        	'name' => 'N/A',
        	'slug' => 'n/a',
        ]);
    }
}
