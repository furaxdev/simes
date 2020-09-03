<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('batch_id')->unique('');



            $table->string('namerank1');
            $table->string('positionrank1');
            $table->string('imagerank1');
            $table->string('namerank2');
            $table->string('positionrank2');
            $table->string('imagerank2');
            $table->string('namerank3');
            $table->string('positionrank3');
            $table->string('imagerank3');
            $table->string('namerank4');
            $table->string('positionrank4');
            $table->string('imagerank4');
            $table->string('namerank5');
            $table->string('positionrank5');
            $table->string('imagerank5');
            $table->string('namerank6');
            $table->string('positionrank6');
            $table->string('imagerank6');
            $table->string('namerank7');
            $table->string('positionrank7');
            $table->string('imagerank7');
            $table->string('namerank8');
            $table->string('positionrank8');
            $table->string('imagerank8');
            $table->string('namerank9');
            $table->string('positionrank9');
            $table->string('imagerank9');
            $table->string('namerank10');
            $table->string('positionrank10');
            $table->string('imagerank10');
            $table->string('namerank11');
            $table->string('positionrank11');
            $table->string('imagerank11');


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
        Schema::dropIfExists('committees');
    }
}