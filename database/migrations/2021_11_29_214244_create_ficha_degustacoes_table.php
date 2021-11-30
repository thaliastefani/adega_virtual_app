<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaDegustacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_degustacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vinho_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vinho_id')->references('id')->on('vinhos');
            $table->boolean('rolha_defeituosa');
            $table->datetime('data_degustacao');
            $table->unsignedBigInteger('brilho_nivel_id');
            $table->unsignedBigInteger('pelarge_nivel_id');
            $table->unsignedBigInteger('intensidade_aroma_nivel_id')->nullable();
            $table->unsignedBigInteger('arcos_nivel_id');
            $table->unsignedBigInteger('acidez_nivel_id');
            $table->unsignedBigInteger('docura_nivel_id');
            $table->unsignedBigInteger('alcool_nivel_id');
            $table->unsignedBigInteger('adstringencia_nivel_id');
            $table->unsignedBigInteger('amargor_nivel_id');
            $table->unsignedBigInteger('corpo_nivel_id');
            $table->unsignedBigInteger('intensidade_sabor_nivel_id')->nullable();
            $table->foreign('brilho_nivel_id')->references('id')->on('niveis');
            $table->foreign('pelarge_nivel_id')->references('id')->on('niveis');
            $table->foreign('intensidade_aroma_nivel_id')->references('id')->on('niveis');
            $table->foreign('arcos_nivel_id')->references('id')->on('niveis');
            $table->foreign('acidez_nivel_id')->references('id')->on('niveis');
            $table->foreign('docura_nivel_id')->references('id')->on('niveis');
            $table->foreign('alcool_nivel_id')->references('id')->on('niveis');
            $table->foreign('adstringencia_nivel_id')->references('id')->on('niveis');
            $table->foreign('amargor_nivel_id')->references('id')->on('niveis');
            $table->foreign('corpo_nivel_id')->references('id')->on('niveis');
            $table->foreign('intensidade_sabor_nivel_id')->references('id')->on('niveis');
            $table->string('equilibrio', 50);
            $table->string('qualidade_sabor', 50);
            $table->string('qualidade_aroma', 50);
            $table->text('classificacao_aroma')->nullable();
            $table->text('classificacao_sabor')->nullable();
            $table->string('persistencia_sabor', 10);
            $table->string('cor', 100);
            $table->string('tipo_preparacao', 50);
            $table->text('caracteristica');
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
        Schema::dropIfExists('ficha_degustacoes');
    }
}
