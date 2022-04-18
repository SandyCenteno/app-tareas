@extends('layouts.base')

@section('content')

<!-- Tareas  -->

<div class="grid grid-cols-1 gap-4 text-gray-900 mt-5 mb-5 text-2xl">

    <div>Crear tarea</div>

</div>

<div class="grid grid-cols-4 gap-4">

    <div class="col-span-4 text-white">
        <div class="">
            <form action="{{route('tareas.store')}}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título</label>
                    <input type="text" id="titulo" name="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>

                <div class="mb-6">
                    <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado</label>
                    <input type="text" id="estado" name="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="fecha_completado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha completado</label>
                    <input type="date" id="fecha_completado" name="fecha_completado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <a href="{{route('tareas.index')}}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    Regresar
                </a>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Guardar
                </button>

            </form>
        </div>
    </div>

</div>

@endsection