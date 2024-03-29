<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('progress');
            $table->timestamps();
        });

        Schema::table('studies', function (Blueprint $table) {
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
        Schema::drop('skills');
    }
}
