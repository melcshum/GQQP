<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentArrayStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('arrayStates', function (Blueprint $table) {
            $table->increments('user_arrayState_id');
            $table->integer('user_id')->unsigned();
            $table->integer('array_point')->default(0);
            $table->integer('array_level')->default(0);

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
        Schema:: drop('arrayStates');
    }
}
