<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('static_pages', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name_en')->unique();
            $table->string('name_ar');
            $table->tinyInteger('override_global_title');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('content_w_en');
            $table->string('content_w_ar');
            $table->string('content_m_en');
            $table->string('content_m_ar');
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
		Schema::drop('static_pages');
	}

}
