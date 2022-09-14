<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_actividades', function (Blueprint $table) {
            $table->bigIncrements('id_cliente_actividad');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_actividad');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');
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
        Schema::dropIfExists('clientes_actividades');
    }
};
