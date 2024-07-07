@extends('layouts.app')

@section('content')
<h1>Eliminar Docente</h1>
<form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
            value="{{ $docente->nombre }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido"
            disabled value="{{ $docente->apellido }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="email"
            disabled value="{{ $docente->email }}">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <button type="sumit" class="btn btn-primary">Eliminar</button>
            <a href="{{ route('docentes.index') }}" class="btn btn-secundary">Cancelar</a>
        </div>
    </div>
</form>
@endsection
