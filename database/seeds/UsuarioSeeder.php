<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\TipoUsuario;
use ControlEventos\Usuario;


class UsuarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
        Usuario::create([
            
            'nombre'=>"Diana Carolina Gutierrez",
            'email' =>"email@test.com",
            'password'=>bcrypt("admin"),
            'pregunta'=>"preg",
            'respuesta'=>"resp",
            'tipo_id'=>'1',
            
        ]);

	}

}
