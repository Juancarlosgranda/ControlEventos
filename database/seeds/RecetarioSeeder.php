<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Recetario;


class RecetarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<50; $i++){
        Recetario::create([
            
            'nombre'=>"nom$i",
            'descripcion' =>"descrip$i",
            
            
        ]);

	}

}}
