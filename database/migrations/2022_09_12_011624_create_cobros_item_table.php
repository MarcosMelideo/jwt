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
        Schema::create('cobros_item', function (Blueprint $table) {
            $table->bigIncrements('id_cobro_item');
            $table->string('actividad_nombre');
            $table->decimal('actividad_precio', 10, 2);
            $table->unsignedBigInteger('id_cobro');
            $table->decimal('descuento', 5, 2);
            $table->foreign('id_cobro')->references('id_cobro')->on('cobros');
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
        Schema::dropIfExists('cobros_item');
    }
};
