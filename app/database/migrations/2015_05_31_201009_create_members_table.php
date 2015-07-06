<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('members', function(Blueprint $table)
	    {
	        $table->increments('id');
	        $table->integer('status');
	        $table->string('picture_url');
	        $table->date('join_date');
	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('title');
	        $table->string('company');
	        $table->string('email_address')->unique();
	        $table->string('linked_in_url');
	        $table->string('class_year');
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
		Schema::drop('members');
	}

}
