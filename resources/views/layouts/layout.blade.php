<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'School Platform')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @livewireStyles
    <nav class="bg-gray-300 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-xl font-bold" href="{{ route('projects.index') }}">Plataforma Escolar</a>
            <div class="flex space-x-4">
                <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                    href="{{ route('home') }}">Inicio</a>
                @if (Auth::check())
                    <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                        href="{{ route('projects.index') }}">Proyectos</a>
                    <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                        href="{{ route('projects.create') }}">Crear Proyecto</a>
                    <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                        href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                        href="{{ route('profile.show') }}">Perfil</a>


                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data class="text-red-600 hover:text-red-800 transform transition-transform duration-300 hover:scale-105">
                                @csrf

                                <a href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>
                            </form>
                      
                @else
                    <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                        href="{{ route('login') }}">Iniciar Sesión</a>
                    <a class="text-gray-700 hover:text-gray-900 transform transition-transform duration-300 hover:scale-105"
                        href="{{ route('register') }}">Registrarse</a>

                @endif
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @livewireScripts
</body>

</html>