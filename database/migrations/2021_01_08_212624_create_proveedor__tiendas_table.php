<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor__tiendas', function (Blueprint $table) {
            $table->foreignId('fk_pr_Codigo');
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('proveedors');
            $table->foreignId('fk_ti_Codigo');
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
        Schema::dropIfExists('proveedor__tiendas');
    }
}
