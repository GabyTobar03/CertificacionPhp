@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Docente</h1>
    <form action="{{ route('docentes.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="password" class="form-label">Contraseña</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <button type="sumit" class="btn btn-primary">Crear</button>
                <a href="{{ route('docentes.index') }}" class="btn btn-secundary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
