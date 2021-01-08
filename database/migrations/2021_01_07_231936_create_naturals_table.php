<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturals', function (Blueprint $table) {
            $table->foreignId('fk_cl_Codigo');
            $table->foreign('fk_cl_Codigo')->references('cl_Codigo')->on('clientes');
            $table->string('cl_n_p_Nombre');
            $table->string('cl_n_s_Nombre')->nullable();
            $table->string('cl_n_p_Apellido');
            $table->string('cl_n_s_Apellidp')->nullable();
            $table->string('cl_n_Nacionalidad');
            $table->string('cl_n_Cedula')->unique();
            $table->string('rif')->nullable()->unique();
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
        Schema::dropIfExists('naturals');
    }
}
