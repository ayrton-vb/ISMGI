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
        Schema::create('actas', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->string('lugar');
            $table->time('hora');
            $table->date('fecha');
            $table->string('relevancia');
            $table->String('scan')->nullable();
            $table->String('foto')->nullable();

            $table->foreignId('id_tipoacta')
            ->nullable()
            ->constrained('tipoactas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_problematica')
            ->nullable()
            ->constrained('problematicas')
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
        Schema::dropIfExists('actas');
    }
};
