<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name', 100);
            $table->string('display_name', 100);
            $table->string('url');
            $table->string('description');
            $table->integer('user_id')->unsigned();
            $table->integer('website_id')->unsigned();
            $table->integer('menu_template_id')->unsigned();
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
		Schema::drop('menus');
	}

}
