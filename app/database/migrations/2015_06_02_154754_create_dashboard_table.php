<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('dashboard', function(Blueprint $table)
	    {
	        $table->increments('id');
	        $table->integer('all_swipes');
	        $table->integer('right_swipes');
	        $table->integer('matches');
	        $table->integer('conversations');
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
		Schema::drop('dashboard');
	}

}
