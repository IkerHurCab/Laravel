

        @extends('layouts.layout')
        @section('title', 'Login')
        @section('content')
        <div class="bg-gray-100 p-8 rounded-xl shadow-md max-w-md mx-auto mt-10">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-blue-700 mb-4">Iniciar Sesión</h1>
                <p class="text-lg text-gray-600">Accede a tu cuenta para gestionar tus proyectos escolares.</p>
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recordar credenciales') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('¿Has olvidado la contarseña?') }}
                        </a>
                    @endif

                    <x-button class="ml-4">
                        {{ __('Iniciar Sesión') }}
                    </x-button>
                </div>
            </form>
        </div>
        @endsection
