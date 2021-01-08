<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLugarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugars', function (Blueprint $table) {
            $table->id('lu_Codigo');
            $table->string('lu_tipo');
            $table->string('lu_nombre');
            $table->unsignedBigInteger('fk_lu_Codigo')->nullable();
            $table->foreign('fk_lu_Codigo')->references('lu_Codigo')->on('lugars');
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
        Schema::dropIfExists('lugars');
    }
}
