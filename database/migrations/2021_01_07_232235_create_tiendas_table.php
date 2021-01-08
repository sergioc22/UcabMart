<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id('ti_Codigo');
            $table->time('ti_Hora_Apertura', $precision = 0);
            $table->time('ti_Hora_Cierre', $precision = 0);
            $table->unsignedBigInteger('fk_lu_Codigo');
            $table->foreign('fk_lu_Codigo')->references('lu_Codigo')->on('lugars');
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
        Schema::dropIfExists('tiendas');
    }
}
