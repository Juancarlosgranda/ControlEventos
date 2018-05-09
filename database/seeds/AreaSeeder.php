<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\Area;


class AreaSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<10; $i++){
        Area::create([
            
            'nombre'=>"area$i",
            
            
        ]);

	}
}
}
