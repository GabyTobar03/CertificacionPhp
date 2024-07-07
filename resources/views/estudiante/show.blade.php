@extends('layouts.app')

@section('content')
<h1>Ver Estudiante</h1>

    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"
            value="{{ $estudiante->nombre }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido"
            value="{{ $estudiante->apellido }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email"
            value="{{ $estudiante->email }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="pin" class="form-label">PIN</label>
            <input type="text" class="form-control" id="pin"
            value="{{ $estudiante->pin }}" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('estudiante.index') }}" class="btn btn-secundary">Regresar</a>
        </div>
    </div>
@endsection