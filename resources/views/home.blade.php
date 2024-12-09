@extends('layouts.layout')
@section('title', 'Inicio')
@section('content')
<div class="bg-gray-100 p-8 rounded-xl shadow-md">
    <div class="text-center mb-8">
        <h1 class="text-6xl font-bold text-blue-700 mb-4 animate-pulse">¡Bienvenido a Plataforma Escolar!</h1>
        <p class="text-lg text-gray-600">Gestiona y organiza tus proyectos escolares de manera sencilla y eficiente.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            <div class="flex items-center justify-center mb-4">
                <div class="bg-blue-100 p-4 rounded-full">
                    <i class="fas fa-tasks text-blue-600 text-3xl"></i>
                </div>
            </div>
            <h2 class="text-2xl font-semibold text-blue-700 text-center mb-2">¿Qué puedes hacer?</h2>
            <ul class="list-disc list-inside text-gray-700 text-lg">
                <li>Crear nuevos proyectos</li>
                <li>Consultar proyectos existentes</li>
                <li>Editar proyectos</li>
                <li>Eliminar proyectos</li>
            </ul>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            <div class="flex items-center justify-center mb-4">
                <div class="bg-green-100 p-4 rounded-full">
                    <i class="fas fa-lightbulb text-green-600 text-3xl"></i>
                </div>
            </div>
            <h2 class="text-2xl font-semibold text-green-700 text-center mb-2">¿Por qué es útil?</h2>
            <p class="text-gray-700 text-lg text-center">
                Mejora la colaboración y organización en el ámbito escolar, permitiendo que los usuarios gestionen proyectos de manera profesional.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            <div class="flex items-center justify-center mb-4">
                <div class="bg-yellow-100 p-4 rounded-full">
                    <i class="fas fa-users text-yellow-600 text-3xl"></i>
                </div>
            </div>
            <h2 class="text-2xl font-semibold text-yellow-700 text-center mb-2">¿Cómo empezar?</h2>
            <p class="text-gray-700 text-lg text-center">
                Regístrate, explora tus proyectos y comienza a organizarte de una manera más eficiente.
            </p>
        </div>
    </div>

    <div class="mt-10 flex justify-center">
        <img src="{{ asset('media/Plataforma_Educativa.jpg') }}" alt="Plataforma Escolar" class="rounded-xl shadow-lg w-full max-w-2xl transform transition-transform duration-300 hover:scale-105">
    </div>
</div>
@endsection
