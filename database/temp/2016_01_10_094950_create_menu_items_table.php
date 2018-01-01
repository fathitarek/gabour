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
//        Schema::create('menu_items', function(Blueprint $table)
//        {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('display_name');
//            $table->tinyInteger('menu_image');
//            $table->tinyInteger('published');
//            $table->string('menuimagefile');
//            $table->integer('menu_id');
//            $table->integer('user_id');
//            $table->timestamps();
//        });
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
