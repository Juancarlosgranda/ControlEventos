<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\TipoUsuario;


class TipoUsuarioSeeder extends Seeder {

	
	public function run()
	{
		
        TipoUsuario::create([
            
            'nombre'=>"Administrador",
            
        ]);
        TipoUsuario::create([
            
            'nombre'=>"Encargado",
            
        ]);
        TipoUsuario::create([
            
            'nombre'=>"Prueba",
            
        ]);

	}

}
