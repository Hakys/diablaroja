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
        Schema::create('direccion_facturante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facturante_id')->index();
            $table->foreignId('direccion_id')->index();
            $table->foreignId('tipo_factura_id')->index();
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
        Schema::dropIfExists('direccion_facturante');
    }
};
