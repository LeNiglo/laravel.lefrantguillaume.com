<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('emails', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('from');
    		$table->string('email');
    		$table->string('subject');
    		$table->text('body');
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
    	Schema::drop('emails');
    }
}
