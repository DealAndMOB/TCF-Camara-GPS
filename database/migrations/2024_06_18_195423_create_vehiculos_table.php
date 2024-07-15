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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 7);
            $table->string('marca', 7);
            $table->string('modelo', 100);
            $table->string('matiz', 100);
            $table->string('anio', 100);
            $table->string('estado', 100);
            $table->string('numero_polisa', 13);
            $table->boolean('rotulacion');
            $table->foreignId('tipo_vehiculo_id')->constrained('tipo_vehiculos');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
