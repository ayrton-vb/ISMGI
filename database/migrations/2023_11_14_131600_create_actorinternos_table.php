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
        Schema::create('actorinternos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_actor')->nullable()
            ->constrained('actors')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_cargo')->nullable()
            ->constrained('cargointernos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_secretaria')->nullable()
            ->constrained('secretarias')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_direccion')->nullable()
            ->constrained('direccions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_unidad')->nullable()
            ->constrained('unidads')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actorinternos');
    }
};
