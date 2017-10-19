<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicianProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('technician_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->integer('technician_id_trc');
            $table->timestamps();
        });
        
        Schema::table('technician_profiles', function($table) {
           $table->foreign('technician_id')->references('id')->on('technicians');
           $table->foreign('profile_id')->references('id')->on('profiles');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('technician_profiles');
    }
}
