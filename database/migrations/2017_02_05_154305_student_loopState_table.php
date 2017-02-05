<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentLoopStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loopStates', function (Blueprint $table) {
            $table->increments('user_loopState_id');
            $table->integer('user_id')->unsigned();
            $table->integer('loop_point')->default(0);
            $table->integer('loop_level')->default(0);

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
        Schema:: drop('loopStates');
    }
}
