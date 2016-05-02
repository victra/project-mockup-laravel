<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAdmin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_admin', function(Blueprint $table)
	    {
	        $table->increments('id');
	        $table->string('name', 50);
	        $table->string('username', 50);
	        $table->string('email', 50);
	        $table->string('password', 100);
	        $table->string('remember_token', 100)->nullable();
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
		Schema::drop('user_admin');
	}

}
