@extends('layouts.app')

@section('content')
    <h1>Eliminar Asistencia</h1>
    <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="estudiante_id" class="form-label">Estudiante</label>
                <input type="text" class="form-control" value="{{ $asistencia->estudiante->nombre }} {{ $asistencia->estudiante->apellido }}" disabled>
            </div>
            <div class="col-sm-6">
                <label for="grupo_id" class="form-label">Grupo</label>
                <input type="text" class="form-control" value="{{ $asistencia->grupo->nombre }}" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Eliminar</button>
                <a href="{{ route('asistencias.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection