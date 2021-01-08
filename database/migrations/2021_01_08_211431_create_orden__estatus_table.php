<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenEstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden__estatus', function (Blueprint $table) {
            $table->foreignId('fk_or_Codigo');
            $table->foreign('fk_or_Codigo')->references('or_Codigo')->on('orden_de__compras');
            $table->foreignId('fk_es_Codigo');
            $table->foreign('fk_es_Codigo')->references('es_Codigo')->on('estatus');
            $table->date('or_es_Fecha');
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
        Schema::dropIfExists('orden__estatus');
    }
}
