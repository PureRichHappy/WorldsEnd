<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersArtistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('users_artists',
            function($table) {
                $table->increments('id');
                $table->integer('users_id');
                $table->integer('artists_id');
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
        Schema::dropIfExists('users');
	}
}
