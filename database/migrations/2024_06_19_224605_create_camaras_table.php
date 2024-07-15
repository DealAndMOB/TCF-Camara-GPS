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
        Schema::create('camaras', function (Blueprint $table) {
            $table->id();
            $table->string('folio', 255);
            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->string('tipo_camara', 100);
            $table->string('resolucion', 20);
            $table->string('conectividad', 50);
            $table->double('precio');
            $table->string('descripcion', 255);
            $table->string('token', 255);
            $table->foreignId('vehiculo_id');
            $table->timestamps();
            $table->boolean('estatus')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camaras');
    }
};
