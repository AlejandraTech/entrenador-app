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
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // ID del cliente
            $table->unsignedBigInteger('user_id'); // Relación con el usuario (entrenador)
            $table->string('name'); // Nombre del cliente
            $table->string('email')->unique(); // Email del cliente
            $table->string('phone')->nullable(); // Teléfono del cliente
            $table->text('notes')->nullable(); // Notas adicionales sobre el cliente
            $table->timestamps();

            // Llave foránea con la tabla users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
