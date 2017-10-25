<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaidersSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caiders_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caider_id')->unsigned();
            $table->string('schedule_from');
            $table->string('schedule_to');
            $table->string('weekday');
            $table->timestamps();
        });
        
        Schema::table('caiders_schedules', function($table) {
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
        Schema::drop('caiders_schedules');
    }
}
