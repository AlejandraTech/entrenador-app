@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full space-y-8">
        <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">{{ $activity->name }}</h1>

        <!-- Client Information -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-8 border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Información de la Actividad</h2>
            <div class="space-y-2 py-2">
                <p><strong class="font-medium">Descripción:</strong> {{ $activity->description }}</p>
            </div>
        </section>

        <!-- Sessions Header and Button -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="mt-6 text-center text-3xl font-bold text-slate-800">Sesiones de Entrenamiento</h2>
            <a href="{{ route('activities.sessions.create', $activity) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-150 ease-in-out">
                Crear Nueva Sesión
            </a>
        </div>

        <!-- Sessions Grid -->
        @if($activity->sessions->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($activity->sessions as $session)
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200">
                <a href="{{ route('activities.sessions.edit', ['activity' => $activity->id, 'session' => $session->id]) }}" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(79, 70, 229, 1);transform: msFilter">
                        <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                        <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                    </svg>Modificar Sesión</a>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $session->name }}</h3>
                <p><strong class="font-medium">Fecha:</strong> {{ $session->date }}</p>
                <p><strong class="font-medium">Duración:</strong> {{ $session->duration }} minutos</p>
                <p><strong class="font-medium">Nivel:</strong> {{ $session->level }}</p>
                <!-- Delete Session Button -->
                <form action="{{ route('sessions.destroy', $session) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar esta sesión? Se perderán los datos permanentemente')" class="group relative flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: msFilter">
                            <path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path>
                        </svg>
                    </button>
                </form>
                <a href="{{ route('activities.sessions.show', ['activity' => $activity->id, 'session' => $session->id]) }}" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ver detalles</a>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-gray-600">No hay sesiones registradas para esta actividad.</p>
        @endif

        <!-- Delete Activity Button -->
        <form action="{{ route('activities.destroy', $activity) }}" method="POST" class="mt-8">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar esta actividad? Se perderán los datos permanentemente')" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(79, 70, 229, 1);transform: msFilter">
                    <path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path>
                </svg>
                Eliminar Actividad
            </button>
        </form>
    </div>
</div>
@endsection