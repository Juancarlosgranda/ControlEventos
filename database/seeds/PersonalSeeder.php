<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Personal;
use ControlEventos\TipoPersonal;



class PersonalSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        
		for($i=0; $i<10; $i++){
        Personal::create([
            
            'nombre'=>"nom$i",
            'descripcion' =>"descrip$i",
            'tipopersonal_id' =>1,
            
            
            
        ]);

	}
    }
}
