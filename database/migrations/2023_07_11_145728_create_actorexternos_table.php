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
        Schema::create('actorexternos', function (Blueprint $table) {
            $table->id();
            $table->string('inclinacionPolitica');
            $table->string('relacion');
            $table->string('aliadoEstategico');
            $table->string('influencia');
            $table->string('capMovilizacion');
            $table->foreignId('id_actor')->nullable()
            ->constrained('actors')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_organizacion')->nullable()
            ->constrained('organizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_cargoexterno')->nullable()
            ->constrained('cargoexternos')
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
        Schema::dropIfExists('actorexternos');
    }
};
