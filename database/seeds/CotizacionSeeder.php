<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Cotizacion;


class CotizacionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<10; $i++){
        Cotizacion::create([
            
            'nombre'=>"cotizacion$i",
            'fecha' =>"2018-01-0$i",
         
           
            
            
        ]);

	}
    }
}
