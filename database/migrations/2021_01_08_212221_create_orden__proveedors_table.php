<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden__proveedors', function (Blueprint $table) {
            $table->foreignId('fk_or_Codigo');
            $table->foreign('fk_or_Codigo')->references('or_Codigo')->on('orden_de__compras');
            $table->foreignId('fk_pr_Codigo')->references('pr_Codigo')->on('proveedors');
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
        Schema::dropIfExists('orden__proveedors');
    }
}
