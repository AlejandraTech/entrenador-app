@extends('layouts.app')

@section('title', 'Editar Sesión')

@section('content')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Editar Sesión</h1>
        </div>
        @if (session('status'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('status') }}
        </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('sessions.update', $session) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $session->name) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="level">Nivel</label>
                    <input type="text" name="level" id="level" value="{{ old('level', $session->level) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nivel">
                    @error('level')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date" value="{{ old('date', $session->date) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Fecha">
                    @error('date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="duration">Duración</label>
                    <input type="number" name="duration" id="duration" value="{{ old('duration', $session->duration) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Duración">
                    @error('duration')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="number_of_participants">Número de Participantes</label>
                    <input type="number" name="number_of_participants" id="number_of_participants" value="{{ old('number_of_participants', $session->number_of_participants) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Número de Participantes">
                    @error('number_of_participants')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="age_range">Rango de Edad</label>
                    <input type="text" name="age_range" id="age_range" value="{{ old('age_range', $session->age_range) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Rango de Edad">
                    @error('age_range')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="location">Ubicación</label>
                    <input type="text" name="location" id="location" value="{{ old('location', $session->location) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ubicación">
                    @error('location')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="equipment">Equipamiento</label>
                    <input type="text" name="equipment" id="equipment" value="{{ old('equipment', $session->equipment) }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Equipamiento">
                    @error('equipment')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="goal">Objetivo</label>
                    <input type="text" name="goal" id="goal" value="{{ old('goal', $session->goal) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Objetivo">
                    @error('goal')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="content">Contenido</label>
                    <textarea name="content" id="content" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contenido">{{ old('content', $session->content) }}</textarea>
                    @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="time_distribution">Distribución del Tiempo</label>
                    <textarea name="time_distribution" id="time_distribution" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Distribución del Tiempo">{{ old('time_distribution', $session->time_distribution) }}</textarea>
                    @error('time_distribution')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Descripción">{{ old('description', $session->description) }}</textarea>
                    @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="warmup_general">Calentamiento General</label>
                    <textarea name="warmup_general" id="warmup_general" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Calentamiento General">{{ old('warmup_general', $session->warmup_general) }}</textarea>
                    @error('warmup_general')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="warmup_specific">Calentamiento Específico</label>
                    <textarea name="warmup_specific" id="warmup_specific" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Calentamiento Específico">{{ old('warmup_specific', $session->warmup_specific) }}</textarea>
                    @error('warmup_specific')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="main_part">Parte Principal</label>
                    <textarea name="main_part" id="main_part" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Parte Principal">{{ old('main_part', $session->main_part) }}</textarea>
                    @error('main_part')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="cooldown">Vuelta a la Calma</label>
                    <textarea name="cooldown" id="cooldown" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Enfriamiento">{{ old('cooldown', $session->cooldown) }}</textarea>
                    @error('cooldown')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="observations">Observaciones</label>
                    <textarea name="observations" id="observations" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Observaciones">{{ old('observations', $session->observations) }}</textarea>
                    @error('observations')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Actualizar Sesión
                </button>
            </div>
        </form>
    </div>
</div>
@endsection