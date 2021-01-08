<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubroMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubro__marcas', function (Blueprint $table) {
            $table->foreignId('fk_ru_Codigo');
            $table->foreign('fk_ru_Codigo')->references('ru_Codigo')->on('rubros');
            $table->foreignId('fk_ma_Codigo');
            $table->foreign('fk_ma_Codigo')->references('ma_Codigo')->on('marca__propias');
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
        Schema::dropIfExists('rubro__marcas');
    }
}
