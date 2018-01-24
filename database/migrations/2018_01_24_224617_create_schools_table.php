<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('no_of_students');
            $table->integer('no_of_campuses');
            $table->integer('no_of_teachers');
            $table->integer('address_id')->unsigned();
            $table->integer('contact_info_id')->unsigned();
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('office_timings');
            $table->string('website');
            $table->string('school_additional_info');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('contact_info_id')->references('id')->on('contact_infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schools');
    }
}
