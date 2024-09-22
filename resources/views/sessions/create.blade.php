@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        @if(isset($client))
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Crear Nueva Sesión para {{ $client->name }}
            </h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('clients.sessions.store', $client) }}" method="POST">
            @elseif(isset($activity))
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Crear Nueva Sesión para {{ $activity->name }}
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('activities.sessions.store', $activity) }}" method="POST">
                @endif
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="name">Nombre de la Sesión</label>
                        <input type="text" name="name" id="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('name') }}" required placeholder="Nombre de la Sesión">
                    </div>
                    <div>
                        <label for="level">Nivel</label>
                        <input type="text" name="level" id="level" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('level') }}" required placeholder="Nivel">
                    </div>
                    <div>
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('date') }}" required>
                    </div>
                    <div>
                        <label for="duration">Duración (minutos)</label>
                        <input type="number" name="duration" id="duration" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('duration') }}" required placeholder="Duración (minutos)">
                    </div>
                    <div>
                        <label for="number_of_participants">Número de Participantes</label>
                        <input type="number" name="number_of_participants" id="number_of_participants" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('number_of_participants') }}" required placeholder="Número de Participantes">
                    </div>
                    <div>
                        <label for="age_range">Rango de Edad</label>
                        <input type="text" name="age_range" id="age_range" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('age_range') }}" required placeholder="Rango de Edad">
                    </div>
                    <div>
                        <label for="location">Ubicación</label>
                        <input type="text" name="location" id="location" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('location') }}" required placeholder="Ubicación">
                    </div>
                    <div>
                        <label for="equipment">Equipo (opcional)</label>
                        <input type="text" name="equipment" id="equipment" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('equipment') }}" placeholder="Equipo (opcional)">
                    </div>
                    <div>
                        <label for="goal">Objetivo</label>
                        <input type="text" name="goal" id="goal" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('goal') }}" required placeholder="Objetivo">
                    </div>
                    <div>
                        <label for="content">Contenido</label>
                        <textarea name="content" id="content" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Contenido">{{ old('content') }}</textarea>
                    </div>
                    <div>
                        <label for="time_distribution">Distribución del Tiempo</label>
                        <textarea name="time_distribution" id="time_distribution" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Distribución del Tiempo">{{ old('time_distribution') }}</textarea>
                    </div>
                    <div>
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Descripción">{{ old('description') }}</textarea>
                    </div>
                    <div>
                        <label for="warmup_general">Calentamiento General</label>
                        <textarea name="warmup_general" id="warmup_general" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Calentamiento General">{{ old('warmup_general') }}</textarea>
                    </div>
                    <div>
                        <label for="warmup_specific">Calentamiento Específico</label>
                        <textarea name="warmup_specific" id="warmup_specific" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Calentamiento Específico">{{ old('warmup_specific') }}</textarea>
                    </div>
                    <div>
                        <label for="main_part">Parte Principal</label>
                        <textarea name="main_part" id="main_part" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Parte Principal">{{ old('main_part') }}</textarea>
                    </div>
                    <div>
                        <label for="cooldown">Vuelta a la Calma</label>
                        <textarea name="cooldown" id="cooldown" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required placeholder="Vuelta a la Calma">{{ old('cooldown') }}</textarea>
                    </div>
                    <div>
                        <label for="observations">Observaciones (opcional)</label>
                        <textarea name="observations" id="observations" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Observaciones (opcional)">{{ old('observations') }}</textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Crear Sesión
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection