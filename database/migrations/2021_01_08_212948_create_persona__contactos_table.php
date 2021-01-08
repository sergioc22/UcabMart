<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona__contactos', function (Blueprint $table) {
            $table->id('per_Codigo');
            $table->string('per_Cedula')->unique();
            $table->string('per_Nacionalidad');
            $table->string('per_p_Nombre');
            $table->string('per_s_Nombre');
            $table->string('per_p_Apellido');
            $table->string('per_s_Apellido');
            $table->string('per_Correo')->unique();
            $table->foreignId('fk_pr_Codigo')->nullable();
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('proveedors');
            $table->foreignId('fk_cl_Codigo')->nullable();
            $table->foreign('fk_cl_Codigo')->references('fk_cl_Codigo')->on('juridicos');
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
        Schema::dropIfExists('persona__contactos');
    }
}
