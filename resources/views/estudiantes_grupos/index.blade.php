@extends('layouts.app')

@section('content')
<h1>Lista Estudiantes Grupos</h1>
    @if (session('success'))
    <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('estudiantes_grupos.index') }}" method="GET">
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
                <a href="{{ route('estudiantes_grupos.create') }}" class="btn btn-secundary">Ir a crear</a>
            </div>
        </div>
    </form>

    <table class="table table-striper">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Grupos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantesGrupos as $estudianteGrupo)
            <tr>
                <td>{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}</td>
                <td>{{ $estudianteGrupo->grupo->nombre }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('estudiantes_grupos.edit', $estudianteGrupo->id) }}"
                                class="btn btn-warning">Editar</a> |
                        </td>
                        <td>
                            <a href="{{ route('estudiantes_grupos.show', $estudianteGrupo->id) }}"
                                class="btn btn-info">Mostrar</a> |
                        </td>
                        <td>
                            <a href="{{ route('estudiantes_grupos.delete', $estudianteGrupo->id) }}"
                                class="btn btn-danger">Eliminar</a>
                        </td>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $estudiantesGrupos->links() }}
        </div>
    </div>
@endsection