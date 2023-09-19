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
        Schema::create('estadoactors', function (Blueprint $table) {
            $table->id();
            $table->string('inclinacionPolitica');
            $table->string('relacion');
            $table->string('aliadoEstategico');
            $table->string('influencia');
            $table->string('capMovilizacion');

            $table->string('organizacion');
            $table->string('cargo');
            $table->string('respaldofotografico');
            $table->string('observacion');
            
            $table->foreignId('id_actor')->nullable()
            ->constrained('actors')
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
        Schema::dropIfExists('estadoactors');
    }
};
