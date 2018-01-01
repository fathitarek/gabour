<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSliderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('slider_items', function(Blueprint $table)
		{
			$table->string('name_ar');
			$table->string('title_ar');
			$table->string('caption_ar');
			$table->string('url_ar');
			$table->string('url_title_ar');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('slider_items', function(Blueprint $table)
		{
			//
		});
	}

}
