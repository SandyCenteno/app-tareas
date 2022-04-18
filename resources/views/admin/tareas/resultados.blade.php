<table class="min-w-full">
    <thead class="border-b">

    </thead>
    <tbody>
        @if (count($tareas))

        @foreach($tareas as $tarea)

        <tr class="bg-white border-b">

            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <strong> {{ $tarea->titulo }} </strong> <br>
                {{ $tarea->descripcion }} <br>
                Creado: {{ $tarea->created_at }}
                Editado: {{ $tarea->updated_ad }}
                Completado: {{ $tarea->fecha_completado }}
            </td>

            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>

                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</button>

                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Completar</button>

            </td>
        </tr>

        @endforeach

        @else
        <tr>
            <td>
                Sin resultados...
            </td>
        </tr>
        @endif


    </tbody>
</table>
<div class="m-5">
    {{ $tareas->links(); }}
</div>