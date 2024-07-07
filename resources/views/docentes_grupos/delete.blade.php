@extends('layouts.app')

@section('content')
    <h1>Eliminar docente grupo</h1>
    <form action="{{ route('docentes_grupos.destroy', $docenteGrupo->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="docente_id" class="form-label">Docente</label>
                <input type="text" class="form-control" id="docente_nombre"
                value="{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}" disabled>
            </div>
            <div class="col-sm-6">
                <label for="grupo_id" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="docente_nombre"
                value="{{ $docenteGrupo->grupo->nombre }}" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <button type="sumit" class="btn btn-primary">Eliminar</button>
                <a href="{{ route('docentes_grupos.index') }}" class="btn btn-secundary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
