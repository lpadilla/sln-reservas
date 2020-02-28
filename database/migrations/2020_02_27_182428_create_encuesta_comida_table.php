<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaComidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_comida', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('comida1_hr')->nullable();
            $table->string('comida1_comida')->nullable();
            $table->string('comida1_cantidad')->nullable();
            $table->string('comida2_hr')->nullable();
            $table->string('comida2_comida')->nullable();
            $table->string('comida2_cantidad')->nullable();
            $table->string('comida3_hr')->nullable();
            $table->string('comida3_comida')->nullable();
            $table->string('comida3_cantidad')->nullable();
            $table->string('comida4_hr');
            $table->string('comida4_comida');
            $table->string('comida4_cantidad');
            $table->string('comida5_hr');
            $table->string('comida5_comida');
            $table->string('comida5_cantidad');
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
        Schema::dropIfExists('encuesta_comida');
    }
}
