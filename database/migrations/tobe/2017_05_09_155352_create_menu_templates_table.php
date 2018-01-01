<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_templates', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->string('preview');
            $table->integer('user_id')->unsigned();
            $table->integer('website_id')->unsigned();
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
		Schema::drop('menu_templates');
	}

}
