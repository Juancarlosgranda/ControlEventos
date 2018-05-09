<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Categoria;



class CategoriaSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<10; $i++){
        Categoria::create([
            
            'nombre'=>"categoria$i",
            
            
            
        ]);

	}
    }
}
