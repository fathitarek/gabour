<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footer_menu_items', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name');
            $table->string('url');
            $table->tinyInteger('published');
            $table->integer('footer_menus_id')->unsigned();
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
		Schema::drop('footer_menu_items');
	}

}
