@extends('layouts.app')

@section('title', 'Editar Actividad')

@section('content')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Editar Actividad</h1>
        </div>
        @if (session('status'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('status') }}
        </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('activities.update', $activity) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="name" class="sr-only">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $activity->name) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="sr-only">Descripción</label>
                    <textarea name="description" id="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Descripción">{{ old('description', $activity->description) }}</textarea>
                    @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Actualizar Actividad
                </button>
            </div>
        </form>
    </div>
</div>
@endsection