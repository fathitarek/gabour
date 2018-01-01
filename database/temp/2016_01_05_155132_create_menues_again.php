<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuesAgain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
//		Schema::create('menus', function(Blueprint $table)
//		{
//			$table->increments('id');
//            $table->string('name');
//            $table->string('display_name');
//            $table->integer('user_id')->unsigned();
//            $table->tinyInteger('published');
//            $table->timestamps();
//		});
//
//        Schema::table('menus', function(Blueprint $table)
//        {
//            $table->foreign('user_id')->references('id')->on('users');
//        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
