<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCotizacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_cotizaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cantidad');
			$table->decimal('precio', 10, 2);
            $table->integer('inventario_id')->unsigned();
            $table->foreign('inventario_id')->references('id')->on('inventarios');
            $table->integer('combo_id')->unsigned();
            $table->foreign('combo_id')->references('id')->on('combos');
            $table->integer('cotizacion_id')->unsigned();
            $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
            
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_cotizacions');
	}

}
