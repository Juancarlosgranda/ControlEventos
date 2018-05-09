<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\TipoPersonal;


class TipoPersonalSeeder extends Seeder {


	public function run()
	   {
		
        TipoPersonal::create([
            
            'nombre'=>"Maaaa",
            
        ]);
        TipoPersonal::create([
            
            'nombre'=>"Mozo",
            
        ]);
        TipoPersonal::create([
            
            'nombre'=>"Prueba",
            
        ]);

	}

}
