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
        Schema::create('relacions', function (Blueprint $table) {
            $table->id();
            $table->string('relacion');
            $table->string('observacion');

            $table->foreignId('id_actor1')->nullable()
            ->constrained('actors')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_actor2')->nullable()
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
        Schema::dropIfExists('relacions');
    }
};
