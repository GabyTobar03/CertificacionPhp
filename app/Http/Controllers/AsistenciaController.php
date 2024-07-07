<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Estudiante;
use App\Models\Grupo;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Asistencia::query();

        if ($request->Has('asistencias_id') && is_numeric($request->asistencias_id)){
            $query->where('asistencias_id', '=', $request->asistencias_id);
        }

        $asistencia = $query->with('estudiante', 'grupo')
            ->orderBy('id', 'desc')
            ->simplePaginate(10);
        $asistencias = $query->orderBy('id', 'desc')->simplePaginate(10);

        return view ('asistencias.index', compact('asistencia', 'asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        $grupos = Grupo::all();

        return view('asistencias.create', compact('estudiantes', 'grupos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asistencia = Asistencia::create($request->all());

        return redirect()->route('asistencias.index')->with('success', 'Asistencia creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        if (!$asistencia){
            return abort(404);
        }

        return view('asistencias.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);

        if (!$asistencia){
            return abort(404);
        }

        $estudiantes = Estudiante::all();
        $grupos = Grupo::all();

        return view('asistencias.edit', compact('asistencia', 'estudiantes', 'grupos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistencia = Asistencia::find($id);

        if (!$asistencia){
            return abort(404);
        }

        $asistencia->estudiante_id = $request->estudiante_id;
        $asistencia->grupo_id = $request->grupo_id;
        $asistencia->fecha = $request->fecha;
        $asistencia->hora_entrada = $request->hora_entrada;

        $asistencia ->save();

        return redirect()->route('asistencias.index')->with('success', 'Asistencia modificado exitosamente');
    }

    public function delete($id)
    {
        $asistencia = Asistencia::with('estudiante', 'grupo')->find($id);

        if (!$asistencia){
            return abort(404, 'Asistencia no encontrada');
        }

        if (!$asistencia->estudiante || !$asistencia->grupo) {
            return abort(404, 'Estudiante o Grupo no encontrado');
        }

        return view('asistencias.delete', compact('asistencia'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id);

        if (!$asistencia){
            return abort(404);
        }

        $asistencia->delete();

        return redirect()->route('asistencias.index')->with('success', 'Asistencia eliminado exitosamente');
    }
}