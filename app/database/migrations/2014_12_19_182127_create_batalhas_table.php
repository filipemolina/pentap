<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatalhasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batalhas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('etapa');
			$table->integer('video_1');
			$table->integer('video_2');
			$table->integer('votos_1')->default(0);
			$table->integer('votos_2')->default(0);
			$table->integer('vencedor')->nullable();
			$table->timestamps();
			$table->softdeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batalhas');
	}

}
