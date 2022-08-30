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
        Schema::create('tuppersexes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha')->unique();
            $table->string('poblacion');
            $table->string('full_name');
            $table->string('telefono');
            
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
        Schema::dropIfExists('tuppersexes');
    }
};
