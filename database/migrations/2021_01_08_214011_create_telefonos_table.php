<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id('te_Clave');
            $table->string('te_Codigo_Area');
            $table->string('te_Numero');
            $table->foreignId('fk_cl_Codigo')->nullable();
            $table->foreign('fk_cl_Codigo')->references('cl_Codigo')->on('clientes');
            $table->foreignId('fk_pe_Codigo')->nullable();
            $table->foreign('fk_pe_Codigo')->references('per_Codigo')->on('persona__contactos');
            $table->foreignId('fk_pr_Codigo')->nullable();
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('proveedors');
            $table->foreignId('fk_pe_id')->nullable();
            $table->foreign('fk_pe_id')->references('pe_id')->on('personals');
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
        Schema::dropIfExists('telefonos');
    }
}
