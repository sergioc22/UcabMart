<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('pr_Codigo');
            $table->string('pr_Nombre');
            $table->double('pr_Precio_x_Unidad', 8, 2);
            $table->string('pr_foto')->nullable();
            $table->unsignedBigInteger('fk_ru_Codigo');
            $table->foreign('fk_ru_Codigo')->references('ru_Codigo')->on('rubros');
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
        Schema::dropIfExists('productos');
    }
}
