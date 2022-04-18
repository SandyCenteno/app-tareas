@extends('layouts.base')

@section('content')

<!-- Tareas  -->

<div class="grid grid-cols-1 gap-4 text-gray-900 mt-5 mb-5 text-2xl">

    <div>TO DO LIST</div>

</div>

<div class="grid grid-cols-4 gap-4">

    <div class="col-span-3 text-white">
        <div class="flex space-x-2">
            <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Tareas Pendientes</button>

            <button type="button" class="inline-block px-6 py-2 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Tareas Completadas</button>
        </div>
    </div>

    <div class="col-span-1 text-white">
        <div class="text-right">
            
            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Agregar</button>

            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Borrar todo</button>

        </div>
    </div>

</div>

<div class="grid grid-cols-4 gap-4">

    <div class="col-span-3">
        <!-- buscador -->
        <search></search>
    </div>

    <div class="col-span-1 text-white">
        <div>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Ordenar por</option>
                <option>Canada</option>
                <option>France</option>
                <option>Germany</option>
            </select>
        </div>
    </div>

</div>

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr class="bg-blue-900">
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Tareas
                            </th>
                            <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-white border-b">

                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <strong> Titulo </strong> <br>
                                Descripción <br>
                                Creado: fecha
                                Editado: fecha
                                Completado: fecha
                            </td>

                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                
                                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>

                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</button>

                                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Completar</button>

                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="m-5">
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection