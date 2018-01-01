<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePageFeaturedLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('home_page_featured_links', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('image_file');
            $table->string('image_caption');
            $table->string('url');
            $table->tinyInteger('published');
            $table->integer('user_id')->unsigned();
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
		Schema::drop('home_page_featured_links');
	}

}
