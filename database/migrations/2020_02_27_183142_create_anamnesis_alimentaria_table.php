<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesisAlimentariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis_alimentaria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('alergia_intolerancia')->nullable();
            $table->string('regimen_especial')->nullable();
            $table->string('favorita')->nullable();
            $table->string('mayor_apetito')->nullable();
            $table->string('suplemento')->nullable();
            $table->string('comida_preentreno')->nullable();
            $table->string('liquidos')->nullable();
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
        Schema::dropIfExists('anamnesis_alimentaria');
    }
}
