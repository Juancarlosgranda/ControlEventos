<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('plano_id')->unsigned();
            $table->foreign('plano_id')->references('id')->on('planos');
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
		Schema::drop('locals');
	}

}
