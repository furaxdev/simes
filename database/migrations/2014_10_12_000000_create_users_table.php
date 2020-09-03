<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('name');
            $table->string('username')->unique();
            $table->string('avatar_path')->nullable();
            $table->boolean('confirmed')->default(true);
            $table->string('password');
            $table->rememberToken();
            $table->enum('role', ['admin', 'student', 'teacher'])->default('student');

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
        Schema::dropIfExists('users');
    }
}