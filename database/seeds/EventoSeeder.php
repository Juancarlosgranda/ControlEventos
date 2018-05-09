<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Evento;
use ControlEventos\Local;



class EventoSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        
        $locales=Local::all();
        
        foreach($locales as $local){
            
		for($i=0; $i<2; $i++){
        Evento::create([
            
            'fecha'=>"2018-0$i-0$i",
            'nombre' =>"nom$i",           
            'local_id' =>$local->id,         
            'estado' =>"estado$i",

        ]);
        }
        }
	}

}
