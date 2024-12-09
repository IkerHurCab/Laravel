@extends('layouts.layout')
@section('content')
<h1 class="text-2xl font-bold mb-4">Bienvenido, {{ Auth::user()->name }}!</h1>
<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            <div class="bg-blue-100 p-4 rounded-t-lg">
                <h3 class="text-xl font-semibold text-blue-700">¿Qué puedes hacer?</h3>
            </div>
            <div class="p-4">
                <ul class="list-disc list-inside text-gray-700 text-lg"></ul>
                    <li>Crear nuevos proyectos</li>
                    <li>Consultar proyectos existentes</li>
                    <li>Editar proyectos</li>
                    <li>Eliminar proyectos</li>
                </ul>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            <div class="bg-green-100 p-4 rounded-t-lg">
                <h3 class="text-xl font-semibold text-green-700">¿Por qué es útil?</h3>
            </div>
            <div class="p-4">
                <p class="text-gray-700">Mejora la colaboración y organización en el ámbito escolar, permitiendo que los usuarios gestionen proyectos de manera profesional.</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            <div class="bg-yellow-100 p-4 rounded-t-lg">
                <h3 class="text-xl font-semibold text-yellow-700">¿Cómo empezar?</h3>
            </div>
            <div class="p-4">
                <p class="text-gray-700">Explora tus proyectos y comienza a organizarte de una manera más eficiente.</p>
            </div>
        </div>
    </div>

</div>


@endsection