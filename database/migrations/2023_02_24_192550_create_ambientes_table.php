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
        Schema::create('ambientes', function (Blueprint $table) {
            $table->string('nro_ambiente',10)->primary();
            $table->string('nombre');
            $table->string('especializacion');
            $table->integer('nro_elementos');
            $table->text('descripcion');
            $table->string('codigo_centro',10);
            $table->foreign('codigo_centro')->references('codigo_centro')->on('sedes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambientes');
    }
};
