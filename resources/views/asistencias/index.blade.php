@extends('layouts.app')

@section('content')
<h1>Lista Asistencia</h1>
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('asistencias.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="sumit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('asistencias.create') }}" class="btn btn-secundary">Ir a crear</a>
            </div>
        </div>
    </form>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Grupo</th>
                <th>Fecha</th>
                <th>Hora de Entrada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
                <tr>
                    <td>{{ $asistencia->estudiante->nombre }} {{ $asistencia->estudiante->apellido }}</td>
                    <td>{{ $asistencia->grupo->nombre }}</td>
                    <td>{{ $asistencia->fecha }}</td>
                    <td>{{ $asistencia->hora_entrada }}</td>
                    <td>
                        <table>
                            <td>
                                <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning">Editar</a> |
                            </td>
                            <td>
                                <a href="{{ route('asistencias.show', $asistencia->id) }}" class="btn btn-info">Mostrar</a>  |
                            </td>
                            <td>
                                <a href="{{ route('asistencias.delete', $asistencia->id) }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $asistencias->links() }}
@endsection