<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_items', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name_en', 100);
            $table->string('name_ar', 100);
            $table->string('lat', 100);
            $table->string('lang', 100);
            $table->integer('website_id')->unsigned();
            $table->integer('location_category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('published');
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('location_items');
	}

}
