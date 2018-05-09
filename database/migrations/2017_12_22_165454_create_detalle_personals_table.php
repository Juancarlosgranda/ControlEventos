<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePersonalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_personales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('h_inicio');
			$table->dateTime('h_final');
			$table->decimal('pago');
			$table->string('calificacion');
			$table->string('comentario');
			$table->integer('num_mesa');
			$table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personales');
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
		Schema::drop('detalle_personals');
	}

}
