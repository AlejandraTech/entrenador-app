@extends('layouts.app')

@section('title', 'Editar Perfil')

@section('content')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Editar Perfil</h1>
        </div>
        @if (session('status'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('status') }}
        </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="name" class="sr-only">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="sr-only">Correo Electrónico</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Correo Electrónico">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Nueva Contraseña (opcional)</label>
                    <input type="password" name="password" id="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nueva Contraseña (opcional)">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="sr-only">Confirmar Nueva Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmar Nueva Contraseña">
                </div>
            </div>
            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Actualizar Perfil
                </button>
            </div>
        </form>

        <form action="{{ route('profile.destroy') }}" method="POST" class="mt-6">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿Seguro que quiere eliminar su cuenta? Se perderán los datos permanentemente')" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" onclick="return confirm('¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.')">
                Eliminar Cuenta
            </button>
        </form>
    </div>
</div>
@endsection