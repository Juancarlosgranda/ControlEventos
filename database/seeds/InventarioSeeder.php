<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Inventario;
use ControlEventos\Area;



class InventarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
        
	{
        
        $areas= Area::all();
        
        foreach($areas as $area){
            
                    for($i=0; $i<10; $i++){
                    Inventario::create([

                        'nombre'=>"nom$i",
                        'descripcion' =>"descrip$i",           
                        'area_id' =>$area->id,

                    ]);

	               }
            }
	}
    
}


