<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->mediumText('keywords');
            $table->mediumText('description');
            $table->integer('template_id')->unsigned();
            $table->integer('website_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('published');
            $table->mediumText('components');
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
		Schema::drop('pages');
	}

}
