<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Local;
use ControlEventos\Plano;



class LocalSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $planos = Plano::all();
        
        $cont=1;
        foreach($planos as $plano){
        
             Local::create([
            
            'nombre'=>"nom$cont",
            'plano_id' =>$plano->id,
            
            ]);
            $cont++;
        }

	}
    }
    
