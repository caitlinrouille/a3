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
        {
            Schema::create('course_player', function (Blueprint $table) {
                $table->increments('id');

                $table->integer('course_id')->unsigned();
                $table->integer('player_id')->unsigned();

                $table->foreign('course_id')->references('id')->on('courses');
                $table->foreign('player_id')->references('id')->on('players')


                $table->timestamps();

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        {
            Schema::drop('course_player');
        }
    }
}
