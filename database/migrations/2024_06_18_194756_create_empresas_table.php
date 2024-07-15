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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('nombre', 250);
            $table->string('descripcion', 250);
            $table->string('sitioweb', 250)->nullable();
            $table->string('giro', 250);
            $table->string('sector', 250);
            $table->string('telefono', 100);
            $table->string('correo', 100);
            $table->foreignId('domicilio_id')->constrained('domicilios')->onDelete('cascade');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
