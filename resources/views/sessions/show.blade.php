@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center sm:px-6 lg:px-8">
    <div class="max-w-7xl w-full space-y-8">

        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Detalles de la Sesión: {{ $session->name }}
        </h2>

        <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <table class="min-w-full bg-white">
                    <tbody>
                        @if(isset($client))
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Cliente:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $client->name }}</td>
                        </tr>
                        @elseif(isset($activity))
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Actividad Grupal:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $activity->name }}</td>
                        </tr>
                        @endif

                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Nombre de la Sesión:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->name }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Nivel:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->level }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fecha:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->date }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Duración (minutos):</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->duration }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Número de Participantes:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->number_of_participants }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rango de Edad:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->age_range }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Ubicación:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->location }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Equipo:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->equipment }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Objetivo:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->goal }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Contenido:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->content }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Distribución del Tiempo:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->time_distribution }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Descripción:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->description }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Calentamiento General:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->warmup_general }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Calentamiento Específico:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->warmup_specific }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Parte Principal:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->main_part }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Vuelta a la Calma:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->cooldown }}</td>
                        </tr>
                        <tr class="w-full border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Observaciones:</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $session->observations ?? 'N/A' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            @if(isset($client))
            <a href="{{ route('clients.sessions.create', $client) }}" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Crear Nueva Sesión
            </a>
            @elseif(isset($activity))
            <a href="{{ route('activities.sessions.create', $activity) }}" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Crear Nueva Sesión
            </a>
            @endif
        </div>
    </div>
</div>
@endsection