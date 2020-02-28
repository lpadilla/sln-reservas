<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerimetrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perimetros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->integer('antebrazo')->nullable();
            $table->integer('torax')->nullable();
            $table->integer('cintura')->nullable();
            $table->integer('brazo_relajado')->nullable();
            $table->integer('brazo_flexionado')->nullable();
            $table->integer('cadera')->nullable();
            $table->integer('muslo_maximo')->nullable();
            $table->integer('muslo_medial')->nullable();
            $table->integer('pantorrilla')->nullable();
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
        Schema::dropIfExists('perimetros');
    }
}
