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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->integer('stock');
            $table->float('coste',8,2);
            $table->float('price',8,2);
            $table->float('vat',8,2);
            $table->string('title');
            $table->string('slug');
            $table->longText('html_description');
            $table->boolean("new");
            $table->boolean("available");
            $table->string('url')->nullable();
            $table->date("release_at");
            $table->string('url_image')->nullable();
            $table->integer('direccion')->defatult(1);
            $table->timestamps();
            $table->unique(['referencia','direccion']);
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
};
