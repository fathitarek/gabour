<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuitemsAgain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
//		Schema::create('menu_items', function(Blueprint $table)
//		{
//            $table->increments('id');
//            $table->string('name')->unique();
//            $table->string('display_name');
//            $table->tinyInteger('menu_image');
//            $table->tinyInteger('published');
//            $table->string('menuimagefile');
//            $table->integer('menu_id')->unsigned();
//            $table->integer('user_id')->unsigned();
//            $table->timestamps();
//		});
//
//        Schema::table('menu_items', function(Blueprint $table)
//        {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
//        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
//		Schema::drop('menu_items');
	}

}
