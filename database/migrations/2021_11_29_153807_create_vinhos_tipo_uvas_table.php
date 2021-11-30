<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinhosTipoUvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinhos_tipo_uvas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vinho_id');
            $table->unsignedBigInteger('tipo_uva_id');
            $table->foreign('vinho_id')->references('id')->on('vinhos');
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
        Schema::dropIfExists('vinhos_tipo_uvas');
    }
}
