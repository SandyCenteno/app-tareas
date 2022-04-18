@extends('layouts.base')

@section('content')

<!-- Tareas  -->

<div class="grid grid-cols-1 gap-4 text-gray-900 mt-5 mb-5 text-2xl">

    <div>TO DO LIST</div>

</div>

<div class="grid grid-cols-4 gap-4">

    <div class="col-span-1 text-white">
        <form action="{{ route('tareas.index') }}" class="m-1" method="GET">

            <input type="hidden" value="true" name="pendientes">

            <button type="submit" class="min-w-full inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Tareas Pendientes</button>

        </form>
    </div>

    <div class="col-span-1 text-white">
        <form action="{{ route('tareas.index') }}" class="m-1" method="GET">

            <input type="hidden" value="true" name="completadas">

            <button type="submit" class="min-w-full inline-block px-6 py-2 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Tareas Completadas</button>

        </form>
    </div>

    <div class="col-span-1 text-white">

        <a href="{{ route('tareas.index') }}" type="submit" class="m-1 min-w-full inline-block px-6 py-2 border-2 border-green-600 text-green-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Todos</a>

    </div>

    <div class="col-span-1 text-white">
        <div class="text-right">

            @if($pendientes == true)
            <a href="{{ route('tareas.create') }}" type="button" class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Agregar</a>
            @endif


            @if($completadas == true)
            <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Borrar todo</button>
            @endif

        </div>
    </div>

</div>

<div class="grid grid-cols-2 gap-4">
    <div class="col-span-2">

        <!-- buscador -->
        <div class="flex items-center justify-center">
            <div class="flex border-2 rounded mb-3 xl:w-96" style="width: 100%;">

                <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Buscar..." id="search" name="search">

            </div>
        </div>

    </div>
</div>

<br>
<hr>

<div class="flex flex-col mt-5">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">

                <div id="resultados">
                    @include('admin.tareas.resultados')
                </div>

            </div>
        </div>
    </div>
</div>

</div>

@endsection

@section('script')

<script type="text/javascript">
    console.log("hola");
    document.getElementById("search").addEventListener("keyup", () => {

        document.getElementById("resultados").innerHTML = "";

        if ((document.getElementById("search").value.length) >= 1) {

            fetch(`tareas/buscador?search=${document.getElementById("search").value}`, {
                    method: 'GET'
                })
                .then(response => response.text())
                .then(html => {
                    console.log(html);
                    document.getElementById("resultados").innerHTML = html
                })

        } else {

            window.location.href = "/";

        }

    });
</script>

@endsection