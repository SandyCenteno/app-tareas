<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class TareasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pendientes     = false;
        $completadas     = false;

        if ($request->input('pendientes')) {

            $pendientes = true;
            $tareas     = Tareas::where('estado', 'pendiente')->paginate(5);
        } else if ($request->input('completadas')) {

            $completadas  = true;
            $tareas       = Tareas::where('estado', 'completado')->paginate(5);
        } else {

            $tareas     = Tareas::paginate(5);
        }

        return view('admin.tareas.index', compact('tareas', 'pendientes', 'completadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tareas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'titulo'            => 'required',
            'descripcion'       => 'required',
            'estado'            => 'required'
        ]);

        Tareas::create($request->all());
        return redirect()->route('tareas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tareas $tarea)
    {

        return view('admin.tareas.editar', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tareas $tarea)
    {

        $this->validate($request, [
            'titulo'            => 'required',
            'descripcion'       => 'required',
            'estado'            => 'required',
            'fecha_completado'  => 'required',
        ]);

        $tarea->update($request->all());
        return redirect()->route('tareas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tareas $tarea)
    {

        $tarea->delete();
        return redirect()->route('tareas.index');
    }

    /**
     * Search task
     **/
    public function search(Request $request)
    {

        $input_search = "";

        if (!empty($request->input('search'))) {
            $input_search = $request->input('search');
        }

        $tareas = Tareas::where('titulo', 'LIKE', "%$input_search%")->paginate(5);

        if (empty($tareas)) {
            $tareas = [];
        }

        return view("admin.tareas.resultados", compact("tareas"));
        
    }
}
