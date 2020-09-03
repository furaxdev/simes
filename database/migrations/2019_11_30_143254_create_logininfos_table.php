<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogininfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logininfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('user_id')->unique();
            $table->integer('batch_id');
            $table->integer('faculty_id');
            $table->string('rollno');
            $table->string('DateOfBirth');
            $table->string('username')->unique();
            $table->string('Password');

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
        Schema::dropIfExists('logininfos');
    }
}