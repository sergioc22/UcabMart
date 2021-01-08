<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubroProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubro__proveedors', function (Blueprint $table) {
            $table->foreignId('fk_ru_Codigo');
            $table->foreign('fk_ru_Codigo')->references('ru_Codigo')->on('rubros');
            $table->foreignId('fk_pr_Codigo');
            $table->foreign('fk_pr_Codigo')->references('pr_Codigo')->on('proveedors');
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
        Schema::dropIfExists('rubro__proveedors');
    }
}
