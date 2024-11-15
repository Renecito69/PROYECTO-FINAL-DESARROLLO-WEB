<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalleresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talleres', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_taller');
            $table->string('runt');
            $table->string('camara_comercio');
            $table->string('direccion');
            $table->unsignedBigInteger('tipo_taller_id')->nullable(); 
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('tipo_taller_id')->references('id')->on('tipo_taller')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talleres');
    }
}
