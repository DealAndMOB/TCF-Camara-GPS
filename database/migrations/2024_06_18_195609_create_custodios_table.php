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
        Schema::create('custodios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trabajador_id')->constrained('trabajadores');
            $table->string('licencia');
            $table->boolean('arma');
            $table->foreignId('vehiculo_id')->nullable()->constrained('vehiculos');
            $table->foreignId('servicio_id')->nullable()->constrained('servicios');
            $table->foreignId('servicio_programado_id')->nullable()->constrained('servicios');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custodios');
    }
};
