<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentIfStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ifStates', function (Blueprint $table) {
            $table->increments('user_ifState_id');
            $table->integer('user_id')->unsigned();
            $table->integer('if_point')->default(0);
            $table->integer('if_level')->default(0);

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
        Schema:: drop('ifStates');
    }
}
