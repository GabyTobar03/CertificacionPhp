@extends('layouts.app')

@section('content')
    <h1>Ver estudiante de grupo</h1>
        <div class="row">
            <div class="col-sm-6">
                <label for="estudiante_id" class="form-label">Estudiante</label>
                <input type="text" class="form-control" id="estudiante_nombre"
                value="{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}" disabled>
            </div>
            <div class="col-sm-6">
                <label for="grupo_id" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo_nombre"
                value="{{ $estudianteGrupo->grupo->nombre }}" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secundary">Cancelar</a>
            </div>
        </div>
@endsection