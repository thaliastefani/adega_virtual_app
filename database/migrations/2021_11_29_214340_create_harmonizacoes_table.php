<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHarmonizacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harmonizacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ficha_degustacao_id');
            $table->unsignedBigInteger('preparacao_id');
            $table->foreign('ficha_degustacao_id')->references('id')->on('ficha_degustacoes');
            $table->foreign('preparacao_id')->references('id')->on('preparacoes');
            $table->string('qualidade_harmonizacao');
            $table->text('elementos_ressaltados_preparacao')->nullable();
            $table->text('elementos_ressaltados_vinho')->nullable();
            $table->text('pontos_positivos')->nullable();
            $table->text('pontos_negativos')->nullable();
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
        Schema::dropIfExists('harmonizacoes');
    }
}
