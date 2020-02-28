<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesisClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis_clinica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('motivo')->nullable();
            $table->string('patologia_transtorno')->nullable();
            $table->string('ultimos_examenes')->nullable();
            $table->string('medicamento')->nullable();
            $table->string('cirugia')->nullable();
            $table->string('defecas')->nullable();
            $table->string('orina')->nullable();
            $table->string('ejercicio')->nullable();
            $table->string('entrenamiento')->nullable();
            $table->string('horas_sentado')->nullable();
            $table->string('minutos_camina')->nullable();
            $table->string('tabaco')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('marihuana')->nullable();
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
        Schema::dropIfExists('anamnesis_clinica');
    }
}
