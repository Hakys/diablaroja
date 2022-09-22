<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaMensajeriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_mensajeria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('factura_id')->index();
            $table->foreignId('mensajeria_id')->index();
            $table->string('seguimiento')->default("");
            $table->float('total',8,2);
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
        Schema::dropIfExists('factura_mensajeria');
    }
}
