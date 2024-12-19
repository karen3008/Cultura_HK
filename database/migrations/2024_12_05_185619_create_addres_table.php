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
        Schema::create('addres', function (Blueprint $table) {
            $table->id();
            $table->text('addres_description'); // para un campo TEXT
            $table->foreignId('continent_id')->constrained()->onDelete('cascade');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->foreignId('states_id')->constrained()->onDelete('cascade');
            $table->foreignId('boroughs_id')->constrained()->onDelete('cascade');
            $table->foreignId('provinces_id')->constrained()->onDelete('cascade');
            $table->foreignId('cities_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addres');
    }
};
