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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('contract_type'); // Typ umowy
            $table->integer('max_hours'); // Maksymalne godziny pracy
            $table->date('hire_date'); // Data zatrudnienia
            $table->decimal('salary', 8, 2); // Wynagrodzenie
            $table->string('phone')->nullable(); // Numer telefonu
            $table->string('email')->unique(); // Adres e-mail
            $table->string('department')->nullable(); // Dział
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
