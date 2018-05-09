<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_eventos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->decimal('adelanto', 10, 2);
            $table->string('comentario');
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->integer('inventario_id')->unsigned();
            $table->foreign('inventario_id')->references('id')->on('inventarios');
            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos');
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
		Schema::drop('detalle_eventos');
	}

}
