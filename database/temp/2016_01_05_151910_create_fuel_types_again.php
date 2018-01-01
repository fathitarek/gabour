<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelTypesAgain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('fuel_types', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('display_name_en');
            $table->string('display_name_ar');
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('published');
            $table->timestamps();
        });

        Schema::table('fuel_types', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fuel_types');
	}

}
