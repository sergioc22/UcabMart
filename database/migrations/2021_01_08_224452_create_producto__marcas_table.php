<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto__marcas', function (Blueprint $table) {
            $table->foreignId('fk_pr_Codigo');
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('productos');
            $table->foreignId('fk_ma_Codigo');
            $table->foreign('fk_ma_Codigo')->references('ma_Codigo')->on('marca__propias');
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
        Schema::dropIfExists('producto__marcas');
    }
}
