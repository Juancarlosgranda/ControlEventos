<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Proveedor;


class ProveedorSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<50; $i++){
        Proveedor::create([
            
            'nombre'=>"nom$i",
            'telefono' =>"tel$i",
            'calificacion' =>"5",
            
            
            
        ]);

	}

}}
