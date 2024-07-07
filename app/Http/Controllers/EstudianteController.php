<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Estudiante::query();

        if ($request->Has('nombre')){
            $query->where('nombre', 'like', '%'. $request->nombre . '%');
        }

        if ($request->Has('apellido')){
            $query->where('apellido', 'like', '%'. $request->apellido . '%');
        }

        $estudiantes = $query->orderBy('id', 'desc')->simplePaginate(10);

        return view('estudiante.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = Estudiante::create($request->all());
        return redirect()->route('estudiante.index')->with('success', 'Estudiante creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante){
            return abort(404);
        }

        return view('estudiante.show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante){
            return abort(404);
        }

        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante){
            return abort(404);
        }

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->pin = $request->pin;

        $estudiante->save();

        return redirect()->route('estudiante.index')->with('success', 'Estudiante modificado exitosamente');
    }

    public function delete($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante){
            return abort(404);
        }

        return view('estudiante.delete', compact('estudiante'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);

        if (!$estudiante){
            return abort(404);
        }

        $estudiante->delete();

        return redirect()->route('estudiante.index')->with('success', 'Estudiante eliminado exitosamente');
    }
}