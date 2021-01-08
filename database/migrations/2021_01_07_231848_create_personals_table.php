<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id('pe_id');
            $table->string('pe_p_Nombre');
            $table->string('pe_s_Nombre')->nullable();
            $table->string('pe_p_Apellido');
            $table->string('pe_s_Apellido')->nullable();
            $table->string('pe_Nacionalidad');
            $table->string('pe_Cedula')->unique();
            $table->string('pe_Cargo');
            $table->unsignedBigInteger('fk_ti_Codigo');
            $table->foreign('fk_ti_Codigo')->references('ti_Codigo')->on('tiendas');
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
        Schema::dropIfExists('personals');
    }
}
