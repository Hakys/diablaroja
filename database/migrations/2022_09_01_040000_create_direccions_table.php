<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->default('Recoge');
            $table->string('telefono');
            $table->string('email')->nullable();
            $table->string('nif')->nullable();
            $table->string('direccion')->nullable()->default('F. Simplificada, Sin Datos');
            $table->string('cp')->nullable();
            $table->string('poblacion')->default('Huelva');
            $table->string('provincia')->nullable();
            $table->string('pais')->nullable()->default('España');
            $table->foreignId('contacto_id')->index();
            $table->foreignId('tipo_id')->index();
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
        Schema::dropIfExists('direccions');
    }
}
