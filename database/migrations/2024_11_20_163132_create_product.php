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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // Primarni ključ - id
            $table->string('name'); // Naziv proizvoda
            $table->text('description')->nullable(); // Opis (može biti prazan)
            $table->integer('amount'); // Količina
            $table->decimal('price', 10, 2); // Cena (10 cifara, 2 decimale)
            $table->string('image')->nullable(); // Putanja do slike (može biti prazna)
            $table->timestamps(); // Kreira created_at i updated_at kolone
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
