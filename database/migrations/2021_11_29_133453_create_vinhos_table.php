<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinhos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('safra_ano', 4);
            $table->decimal('teor_alcoolico', 10, 2);
            $table->string('tipo_vinho', 20);
            $table->string('especifidade', 100)->nullable();
            $table->string('regiao', 100);
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('vinicola_id');
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->foreign('vinicola_id')->references('id')->on('vinicolas');
            $table->unsignedBigInteger('tipo_uva_id');
            $table->foreign('tipo_uva_id')->references('id')->on('tipo_uvas');
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
        Schema::dropIfExists('vinhos');
    }
}
