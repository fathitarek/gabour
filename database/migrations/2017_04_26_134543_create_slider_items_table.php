<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slider_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('title');
			$table->string('caption');
			$table->string('url');
			$table->string('img');
			$table->string('url_title');
			$table->integer('slider_id')->unsigned();
//			$table->integer('website_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->tinyInteger('published');
			$table->softDeletes();
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
		Schema::drop('slider_items');
	}

}
