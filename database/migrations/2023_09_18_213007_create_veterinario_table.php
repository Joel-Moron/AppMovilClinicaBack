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
        Schema::create('veterinario', function (Blueprint $table) {
            $table->id();
            $table->string('veterinario_nombre');
            $table->string('veterinario_apellidop');
            $table->string('veterinario_apellidom');
            $table->bigInteger('veterinario_telefono')->unique();
            $table->string('veterinario_email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinario');
    }
};
