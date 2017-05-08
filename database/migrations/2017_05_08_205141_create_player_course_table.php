<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
 {
     Schema::create('player_course', function (Blueprint $table) {

         $table->increments('id');
         $table->timestamps();
         $table->integer('player_id')->unsigned();
         $table->integer('course_id')->unsigned();
         $table->foreign('player_id')->references('id')->on('players');
         $table->foreign('course_id')->references('id')->on('courses');
     });
 }

 public function down()
 {
     Schema::drop('player_course');
 }
}
