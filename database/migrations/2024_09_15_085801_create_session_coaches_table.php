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
        Schema::create('session_coaches', function (Blueprint $table) {
            $table->id(); // ID de la sesión
            $table->unsignedBigInteger('client_id')->nullable(); // Relación con el cliente individual
            $table->unsignedBigInteger('group_activity_id')->nullable(); // Relación con la actividad grupal
            $table->unsignedBigInteger('user_id'); // Relación con el usuario (entrenador)
            $table->string('name'); // Nombre de la sesión
            $table->string('level'); // Nivel (principiante, intermedio, avanzado)
            $table->date('date'); // Fecha de la sesión
            $table->integer('duration'); // Duración en minutos
            $table->integer('number_of_participants'); // Número de participantes
            $table->string('age_range'); // Rango de edad de los participantes
            $table->string('location'); // Lugar físico donde se realizará la sesión
            $table->string('equipment')->nullable(); // Material necesario para la sesión

            // Detalles de la sesión
            $table->string('goal'); // Objetivo de la sesión
            $table->text('content'); // Contenido de la sesión
            $table->text('time_distribution'); // Distribución del tiempo en la sesión
            $table->text('description'); // Descripción detallada de la sesión

            // Calentamiento
            $table->text('warmup_general')->nullable(); // Calentamiento general
            $table->text('warmup_specific')->nullable(); // Calentamiento específico

            // Parte Principal
            $table->text('main_part')->nullable(); // Actividades centrales de la sesión

            // Vuelta a la Calma
            $table->text('cooldown')->nullable(); // Actividades finales para relajar el cuerpo

            $table->text('observations')->nullable(); // Observaciones adicionales y comentarios
            $table->timestamps();

            // Llaves foráneas
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('group_activity_id')->references('id')->on('group_activities')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_coaches');
    }
};
