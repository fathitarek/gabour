<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('website_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('display_in');
			$table->tinyInteger('published');
			$table->softDeletes();
			$table->timestamps();
		});
	}
	// Schema::table('sliders', function($table) {
	// 		$table->foreign('user_id')->references('id')->on('users');
	// 		$table->foreign('website_id')->references('id')->on('websites');
	// });
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sliders');
	}

}
