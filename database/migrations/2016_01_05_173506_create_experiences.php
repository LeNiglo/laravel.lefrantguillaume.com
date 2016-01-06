<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->date('begin_date');
            $table->date('end_date');
            $table->string('company');
            $table->string('subject');
            $table->integer('rating');
            $table->text('commentary');
            $table->timestamps();
        });

        Schema::create('experience_skill', function (Blueprint $table) {
            $table->integer('experience_id');
            $table->integer('skill_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('experiences');
        Schema::drop('experience_skill');
    }
}
