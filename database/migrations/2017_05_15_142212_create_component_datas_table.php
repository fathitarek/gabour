<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentDatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('component_datas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->mediumText('component_data');
            $table->integer('component_template_id')->unsigned();
            $table->integer('website_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('published');
            $table->softDeletes();
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
		Schema::drop('component_datas');
	}

}
