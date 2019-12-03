<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cor');
            $table->string('valor');
            $table->integer('ano');
            $table->integer('km_rodado');
            $table->unsignedBigInteger('marcas_id');
            $table->unsignedBigInteger('modelos_id');
            $table->foreign('marcas_id')->references('id')->on('marcas');
            $table->foreign('modelos_id')->references('id')->on('modelos');
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
        Schema::dropIfExists('veiculos');
    }
}
