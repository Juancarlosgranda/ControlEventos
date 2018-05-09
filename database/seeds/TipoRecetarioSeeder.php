<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\TipoRecetario;


class TipoRecetarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
        TipoRecetario::create([
            
            'nombre'=>"Coctel",
            
        ]);
        TipoRecetario::create([
            
            'nombre'=>"Plato",
            
        ]);
        TipoRecetario::create([
            
            'nombre'=>"Prueba",
            
        ]);

	}

}
