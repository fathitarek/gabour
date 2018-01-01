<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	 public function up()
 	{
 			Schema::create('contacts', function (Blueprint $table) {
 					$table->increments('id');
 					$table->string('name');
 					$table->string('mobile');
 					$table->string('email');
 					$table->string('message');
 					$table->string('website');
 					$table->integer('user_id')->unsigned();

					//$table->tinyInteger('published');
 					$table->timestamps();
 					$table->softDeletes();
 			});
 	}

 	public function down()
 	{
 			Schema::drop('contacts');
 	}
 }
