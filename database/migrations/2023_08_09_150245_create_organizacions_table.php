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
        Schema::create('organizacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('sigla');
            $table->string('fundacion');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->foreignId('id_dependencia')->nullable()
            ->constrained('organizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_tipoorganizacion')->nullable()
            ->constrained('tipoorganizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizacions');
    }
};
