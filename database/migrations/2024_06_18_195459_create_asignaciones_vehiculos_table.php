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
        Schema::create('asignaciones_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('viaje_id')->constrained('viajes');
            $table->foreignId('vehiculo_id')->constrained('vehiculos');
            $table->longText('observaciones');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones_vehiculos');
    }
};
