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
        Schema::create('vehiculo_mercancias', function (Blueprint $table) {
            $table->id();
            $table->string('operador', 255);
            $table->string('linea', 255);
            $table->string('telefono', 10);
            $table->string('tipo_transporte', 255);
            $table->string('economico', 100);
            $table->string('placa', 7);
            $table->string('placas_caja', 7);
            $table->string('marca', 100);
            $table->string('matiz', 100);
            $table->string('sellos', 100);
            $table->foreignId('viaje_id')->nullable()->constrained('viajes');
            $table->boolean('estatus');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo_mercancias');
    }
};
