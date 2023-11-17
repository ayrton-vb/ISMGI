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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_acta')
            ->nullable()
            ->constrained('actas')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_actorexterno')
            ->nullable()
            ->constrained('actorexternos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_actorinterno')
            ->nullable()
            ->constrained('actorinternos')
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
        Schema::dropIfExists('registros');
    }
};
