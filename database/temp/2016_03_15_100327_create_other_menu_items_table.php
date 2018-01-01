<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('other_menu_items', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name');
            $table->tinyInteger('menu_image');
            $table->tinyInteger('published');
            $table->string('menuimagefile');
            $table->string('hover');
            $table->integer('menu_id')->unsigned();
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
		Schema::drop('other_menu_items');
	}

}
