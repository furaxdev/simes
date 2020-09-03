<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->unique();
            $table->integer('batch_id');
            $table->integer('faculty_id');

            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('phonenumber')->unique()->nullable();
            $table->longText('about')->nullable();
            $table->longText('academicdetails')->nullable();
            $table->mediumText('facebooklink')->nullable();
            $table->mediumText('instagramlink')->nullable();
            $table->mediumText('linkedinlink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}