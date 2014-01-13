<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserArtistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('user_artist',
            function($table) {
                $table->increments('id');
                $table->integer('user_id');
                $table->integer('artist_id');
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
		//
        Schema::dropIfExists('user_artist');
	}
}
