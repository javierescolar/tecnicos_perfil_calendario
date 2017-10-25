<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaidersSchedulesUpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caiders_schedulesUpdate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caider_id')->unsigned();
            $table->string('schedule_from');
            $table->string('schedule_to');
            $table->date('weekday');
            $table->timestamps();
        });
        
        Schema::table('caiders_schedulesUpdate', function($table) {
           $table->foreign('caider_id')->references('id')->on('caiders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('caiders_schedulesUpdate');
    }
}
