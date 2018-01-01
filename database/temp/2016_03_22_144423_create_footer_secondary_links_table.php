<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterSecondaryLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footer_secondary_links', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name');
            $table->string('lang');
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
		Schema::drop('footer_secondary_links');
	}

}
