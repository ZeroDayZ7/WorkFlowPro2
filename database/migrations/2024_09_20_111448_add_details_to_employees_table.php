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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('surname'); // Nazwisko
            $table->string('pesel')->unique(); // PESEL
            $table->string('city'); // Miejscowość
            $table->string('street'); // Ulica
            $table->string('house_number'); // Nr domu
            $table->string('building_number')->nullable(); // Nr budynku (opcjonalne)
            $table->string('postal_code'); // Kod pocztowy
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
};
