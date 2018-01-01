<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsAgain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name_en')->unique();
            $table->string('name_ar');
            $table->string('display_name_en');
            $table->string('display_name_ar');
            $table->string('title_ar');
            $table->string('title_en');
            $table->tinyInteger('override_global_title');
            $table->tinyInteger('static_content');
            $table->mediumText('header_en');
            $table->mediumText('header_ar');

            $table->mediumText('main_slider_w_en');
            $table->mediumText('highlights_w_en');
            $table->mediumText('exterior_w_en');
            $table->mediumText('interior_w_en');
            $table->mediumText('performance_w_en');
            $table->mediumText('safety_w_en');
            $table->mediumText('convenience_w_en');
            $table->mediumText('specification_w_en');
            $table->mediumText('temp1_w_en');
            $table->mediumText('temp2_w_en');

            $table->mediumText('main_slider_w_ar');
            $table->mediumText('highlights_w_ar');
            $table->mediumText('exterior_w_ar');
            $table->mediumText('interior_w_ar');
            $table->mediumText('performance_w_ar');
            $table->mediumText('safety_w_ar');
            $table->mediumText('convenience_w_ar');
            $table->mediumText('specification_w_ar');
            $table->mediumText('temp1_w_ar');
            $table->mediumText('temp2_w_ar');

            $table->mediumText('mobile_header_en');
            $table->mediumText('mobile_header_ar');

            $table->string('main_slider_m_en');
            $table->string('highlights_m_en');
            $table->string('exterior_m_en');
            $table->string('interior_m_en');
            $table->string('performance_m_en');
            $table->string('safety_m_en');
            $table->string('convenience_m_en');
            $table->string('specification_m_en');
            $table->string('temp1_m_en');
            $table->string('temp2_m_en');

            $table->string('main_slider_m_ar');
            $table->string('highlights_m_ar');
            $table->string('exterior_m_ar');
            $table->string('interior_m_ar');
            $table->string('performance_m_ar');
            $table->string('safety_m_ar');
            $table->string('convenience_m_ar');
            $table->string('specification_m_ar');
            $table->string('temp1_m_ar');
            $table->string('temp2_m_ar');

            $table->date('release_date');
            $table->integer('category_id')->unsigned();
            $table->integer('fuel_types_id')->unsigned();
            $table->integer('drive_configurations_id')->unsigned();
            $table->tinyInteger('published');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
		});

        Schema::table('cars', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('fuel_types_id')->references('id')->on('fuel_types')->onDelete('cascade');
            $table->foreign('drive_configurations_id')->references('id')->on('drive_configurations')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cars');
	}

}
