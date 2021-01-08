<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal__nominas', function (Blueprint $table) {
            $table->foreignId('fk_pe_id');
            $table->foreign('fk_pe_id')->references('pe_id')->on('personals');
            $table->foreignId('fk_co_id');
            $table->foreign('fk_co_id')->references('co_id')->on('control_de__nominas');
            $table->time('pe_co_Hora_Entrada');
            $table->time('pe_co_Hora_Salida');
            $table->boolean('pe_co_Cumplido');
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
        Schema::dropIfExists('personal__nominas');
    }
}
