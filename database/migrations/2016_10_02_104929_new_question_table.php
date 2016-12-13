<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class newQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newQuestions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->char('question_type', 1);
            $table->integer('user_id')->unsigned();
            $table->string('question_task');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: drop('newQuestion');
    }
}
