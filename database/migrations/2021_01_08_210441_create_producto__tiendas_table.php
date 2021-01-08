<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto__tiendas', function (Blueprint $table) {
            $table->foreignId('fk_pr_Codigo');
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('productos');
            $table->foreignId('fk_ti_Codigo');
            $table->foreign('fk_ti_Codigo')->references('ti_Codigo')->on('tiendas');
            $table->integer('pr_ti_Cantidad_Disponible');
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
        Schema::dropIfExists('producto__tiendas');
    }
}
