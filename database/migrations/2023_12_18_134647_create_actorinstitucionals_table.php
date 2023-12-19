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
        Schema::create('actorinstitucionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_actor')
            ->nullable()
            ->constrained('actors')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_cargoinstitucional')
            ->nullable()
            ->constrained('cargoinstitucionals')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_institucion')
            ->nullable()
            ->constrained('institucions')
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
        Schema::dropIfExists('actorinstitucionals');
    }
};
