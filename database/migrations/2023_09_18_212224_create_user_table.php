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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('user_alias')->unique();
            $table->string('user_nombre');
            $table->string('user_apellidop');
            $table->string('user_apellidom');
            $table->bigInteger('user_dni');
            $table->string('user_email')->unique();
            $table->string('user_emailV')->nullable();
            $table->string('user_password');
            $table->string('user_token')->nullable();
            $table->date('date_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
