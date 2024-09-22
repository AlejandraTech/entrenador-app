@extends('layouts.app')

@section('title', 'Panel de Control')

@section('content')
<div class="min-h-screen bg-gray-100 py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white shadow-lg rounded-xl p-6">
            <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-6">
                Bienvenido, {{ Auth::user()->name }}
            </h2>

            <!-- Main Content -->
            <main>
                <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                    <div class="max-w-md w-full space-y-8">
                        <!-- Clients List -->
                        <section class="bg-white rounded-lg shadow-sm p-6">
                            <div class="flex items-center justify-between border-b border-gray-200 pb-4 mb-4">
                                <h2 class="mt-6 text-center text-3xl font-bold text-slate-800">Mis Clientes</h2>
                                <a href="{{ route('clients.create') }}" class="inline-flex items-center gap-2 rounded bg-indigo-600 py-2 px-4 text-white font-semibold shadow-md transition-all hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-4 h-4">
                                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="space-y-4 py-2">
                                @if(Auth::user()->clients->count() > 0)
                                <ul class="divide-y divide-gray-200">
                                    @foreach(Auth::user()->clients as $client)
                                    <li class="py-4 flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <img class="h-14 w-14 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($client->name) }}&background=random" alt="{{ $client->name }}">
                                            <div>
                                                <strong class="font-medium">{{ $client->name }}</strong>
                                                <p class="text-sm text-gray-600">{{ $client->email }}</p>
                                            </div>
                                        </div>
                                        <div class="flex space-x-2 items-center">
                                            <div>
                                                <a href="{{ route('clients.show', $client) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Ver detalles</a>
                                                <a href="{{ route('clients.edit', $client) }}" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(79, 70, 229, 1);transform: msFilter">
                                                        <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                                                        <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <div class="text-gray-500">No tienes clientes registrados aún.</div>
                                @endif
                            </div>
                        </section>

                        <!-- Group Activities List -->
                        <section class="bg-white rounded-lg shadow-sm p-6">
                            <div class="flex items-center justify-between border-b border-gray-200 pb-4 mb-4">
                                <h2 class="mt-6 text-center text-3xl font-bold text-slate-800">Actividades Grupales</h2>
                                <a href="{{ route('activities.create') }}" class="inline-flex items-center gap-2 rounded bg-indigo-600 py-2 px-4 text-white font-semibold shadow-md transition-all hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-4 h-4">
                                        <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm1.5 1H8c-3.309 0-6 2.691-6 6v1h15v-1c0-3.309-2.691-6-6-6z"></path>
                                        <path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="space-y-4 py-2">
                                @if(Auth::user()->activities->count() > 0)
                                <ul class="divide-y divide-gray-200">
                                    @foreach(Auth::user()->activities as $activity)
                                    <li class="py-4 flex items-start justify-between">
                                        <div class="flex-1">
                                            <strong class="font-medium">{{ $activity->name }}</strong>
                                            <p class="text-sm text-gray-600">{{ Str::limit($activity->description, 100) }}</p>
                                            <p class="text-sm text-gray-500 mt-1">{{ $activity->sessions->count() }} sesiones</p>
                                        </div>
                                        <div class="flex space-x-2">
                                            <div>
                                                <a href="{{ route('activities.show', $activity) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Ver detalles</a>
                                                <a href="{{ route('activities.edit', $activity) }}" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(79, 70, 229, 1);transform: msFilter">
                                                        <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                                                        <path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <div class="text-gray-500">No tienes actividades grupales registradas aún.</div>
                                @endif
                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection