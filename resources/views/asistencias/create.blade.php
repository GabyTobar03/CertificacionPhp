@extends('layouts.app')

@section('content')
<h1>Crear Nueva Asistencia</h1>
<form action="{{ route('asistencias.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <label for="estudiante_id" class="form-label">Estudiante:</label>
            <select name="estudiante_id" id="estudiante_id" class="form-control" required>
                @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6">
            <label for="grupo_id" class="form-label">Grupo:</label>
            <select name="grupo_id" id="grupo_id" class="form-control" required>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6">
            <label for="fecha" class="form-label">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>
        <div class="col-sm-6">
            <label for="hora_entrada" class="form-label">Hora de Entrada:</label>
            <input type="time" name="hora_entrada" id="hora_entrada" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <button type="sumit" class="btn btn-primary">Crear</button>
            <a href="{{ route('asistencias.index') }}" class="btn btn-secundary">Cancelar</a>
        </div>
    </div>
</form>

@endsection