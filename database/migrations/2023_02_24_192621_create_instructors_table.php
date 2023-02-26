<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->string('nro_documento',10)->primary();
            $table->string('tipo_documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono');
            $table->string('email');
            $table->boolean('estado');
            $table->integer('tiempos');
            $table->string('codigo_red',10);
            $table->string('codigo_area',10);
            $table->foreign('codigo_red')->references('codigo_red')->on('reds');
            $table->foreign('codigo_area')->references('codigo_area')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
