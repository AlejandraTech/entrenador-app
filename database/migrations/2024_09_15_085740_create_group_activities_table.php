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
        Schema::create('group_activities', function (Blueprint $table) {
            $table->id(); // ID de la actividad grupal
            $table->unsignedBigInteger('user_id'); // Relación con el usuario (entrenador)
            $table->string('name'); // Nombre de la actividad grupal
            $table->text('description')->nullable(); // Descripción de la actividad grupal
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
        Schema::dropIfExists('group_activities');
    }
};
