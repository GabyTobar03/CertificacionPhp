@extends('layouts.app')

@section('content')
    <h1>Ver Asistencia</h1>
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
        <div class="col-sm-6">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" value="{{ $asistencia->fecha }}" disabled>
        </div>
        <div class="col-sm-6">
            <label for="hora_entrada" class="form-label">Hora de Entrada</label>
            <input type="time" class="form-control" value="{{ $asistencia->hora_entrada }}" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('asistencias.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
@endsection