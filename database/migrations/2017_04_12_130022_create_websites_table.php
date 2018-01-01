<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebsitesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name_en');
            $table->string('display_name_ar');
            $table->string('view_folder');
            $table->string('html_includes');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('meta_en');
            $table->string('meta_ar');
            $table->string('description_en');
            $table->string('description_ar');
            $table->string('logo_en');
            $table->string('logo_ar');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('linkedin');
            $table->string('google_plus');
            $table->string('pinterest');
            $table->integer('user_id')->unsigned();
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
        Schema::drop('websites');
    }
}
