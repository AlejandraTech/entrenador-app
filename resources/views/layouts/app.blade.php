<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Entrenador')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-white shadow-lg rounded-xl p-6">
        <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto text-center">
                <div class="flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(79, 70, 229, 1);">
                        <path d="M6 5v14h3v-6h6v6h3V5h-3v6H9V5zM3 15a1 1 0 0 0 1 1h1V8H4a1 1 0 0 0-1 1v2H2v2h1v2zm18-6a1 1 0 0 0-1-1h-1v8h1a1 1 0 0 0 1-1v-2h1v-2h-1V9z"></path>
                    </svg>
                    <h2 class="text-3xl font-extrabold text-indigo-600 mb-4">
                        Entrenador
                    </h2>
                </div>
                <nav class="inline-block bg-white shadow-md rounded-md py-12">
                    <div class="space-y-2 py-2">
                        <hr class="border-gray-300">
                    </div>
                    <div class="flex space-x-4 justify-center">
                        <a href="/" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            Inicio
                        </a>
                        <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
                            Mi Perfil
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-indigo-300 text-sm font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cerrar sesión
                            </button>
                        </form>
                    </div>
                    <div class="space-y-2 py-2">
                        <hr class="border-gray-300">
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Contenido del pie de página -->
    </footer>

</body>

</html>