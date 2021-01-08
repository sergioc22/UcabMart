<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden__productos', function (Blueprint $table) {
            $table->foreignId('fk_or_Codigo');
            $table->foreign('fk_or_Codigo')->references('or_Codigo')->on('orden_de__compras');
            $table->foreignId('fk_pr_Codigo');
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('productos');
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
        Schema::dropIfExists('orden__productos');
    }
}
