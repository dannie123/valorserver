<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('settings', function(Blueprint $table)
	    {
	        $table->increments('id');
	        $table->string('color1')->nullable();
	        $table->string('color2')->nullable();
	        $table->string('color3')->nullable();
	        $table->string('welcome_logo')->nullable();
	        $table->string('app_header')->nullable();
	        $table->string('menu_header')->nullable();
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
		Schema::drop('settings');
	}

}
