<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->default(today());
            $table->string('num_pedido');
            $table->string('num_factura');
            $table->float('total',8,2);
            $table->foreignId('operacion_id')->index();
            $table->foreignId('concepto_id')->index();
            $table->foreignId('direccion_id')->name('emisor_id')->index();
            $table->foreignId('direccion_id')->name('receptor_id')->index();
            $table->foreignId('factura_id')->index()->name('asociada')->nullable()->default(null);
            $table->foreignId('estado_id')->index()->default(1);
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
        Schema::dropIfExists('facturas');
    }
}
