<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuridicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridicos', function (Blueprint $table) {
            $table->foreignId('fk_cl_Codigo');
            $table->foreign('fk_cl_Codigo')->references('cl_Codigo')->on('clientes');
            $table->string('cl_j_rif')->unique();
            $table->string('cl_j_Denominacion_Comercial');
            $table->string('cl_j_Razon_Social');
            $table->string('cl_j_Pagina_Web')->nullable();
            $table->integer('cl_j_Capital_Disponible');
            $table->unsignedBigInteger('fk_lu_Codigo_Fiscal');
            $table->foreign('fk_lu_Codigo_Fiscal')->references('lu_Codigo')->on('lugars');
            $table->unsignedBigInteger('fk_lu_Codigo_Principal');
            $table->foreign('fk_lu_Codigo_Principal')->references('lu_Codigo')->on('lugars');
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
        Schema::dropIfExists('juridicos');
    }
}
