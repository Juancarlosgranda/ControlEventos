<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Combo;


class ComboSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<10; $i++){
        Combo::create([
            
            'nombre'=>"combo$i",
         
           
            
            
        ]);

	}
    }
}
