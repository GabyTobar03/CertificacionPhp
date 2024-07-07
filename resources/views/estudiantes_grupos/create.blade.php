@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Estudiante Grupo</h1>
    <form action="{{ route('estudiantes_grupos.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="estudiante_id" class="form-label">Estudiante: </label>
                <select name="estudiante_id" class="form-control" required>
                    <option value="">Seleccione un estudiante</option>
                    @foreach ($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6">
                <label for="grupo_id" class="form-label">Grupo: </label>
                <select name="grupo_id" class="form-control" required>
                    <option value="">Seleccione un grupo</option>
                    @foreach ($grupos as $grupo)
                        <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <button type="sumit" class="btn btn-primary">Crear</button>
                <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secundary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection