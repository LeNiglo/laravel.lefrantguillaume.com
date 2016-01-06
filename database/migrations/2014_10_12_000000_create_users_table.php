<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('users', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name');
    		$table->string('email')->unique();
    		$table->string('email2')->nullable();
    		$table->string('addr1');
    		$table->string('addr2')->nullable();
    		$table->string('addr3')->nullable();
    		$table->string('phone');
    		$table->string('password', 60);
    		$table->rememberToken();
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
    	Schema::drop('users');
    }
}
