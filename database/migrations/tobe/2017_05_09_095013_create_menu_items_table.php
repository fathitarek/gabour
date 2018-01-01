<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_items', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name', 100);
            $table->string('display_name', 100);
            $table->string('description');
            $table->string('image');
            $table->string('url');
            $table->integer('user_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->integer('website_id')->unsigned();
            $table->integer('menu_item_id')->unsignedInteger()->default(0)->nullable();
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
		Schema::drop('menu_items');
	}

}
