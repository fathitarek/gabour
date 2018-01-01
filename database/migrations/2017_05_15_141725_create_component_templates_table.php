<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('component_templates', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->string('preview');
            $table->mediumText('component_structure');
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
		Schema::drop('component_templates');
	}

}
