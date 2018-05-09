<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Plano;


class PlanoSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<50; $i++){
        Plano::create([
            
            'nombre'=>"nom$i",
            'imagen' =>"/img/text.png",
            
            
            
        ]);

	}

}}
