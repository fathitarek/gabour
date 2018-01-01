<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsAgain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('settings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('global_title_en');
            $table->string('global_title_ar');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('settings', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Settings');
	}

}
