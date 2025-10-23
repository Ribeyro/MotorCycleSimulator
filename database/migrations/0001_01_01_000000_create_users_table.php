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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('name');
            $table->string('last_name');
            $table->decimal('tiempo_total', 12, 4); // Ejemplo: 134.2718
            $table->integer('vel_maxima'); // Ejemplo: 137
            $table->integer('vel_promedio'); // Ejemplo: 23
            $table->integer('num_objetivos_cumplidos');
            $table->integer('num_infracciones');
            $table->json('lista_casos');
            $table->json('lista_senales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('users');
    }
};
