@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('docentes.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="sumit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('docentes.create') }}" class="btn btn-secundary">Ir a crear</a>
             </div>
        </div>
    </form>

    <table class="table table-striper">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
            <tr>
                <td>{{ $docente->nombre }}</td>
                <td>{{ $docente->apellido }}</td>
                <td>{{ $docente->email }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-warning">Editar</a> |
                        </td>
                        <td>
                            <a href="{{ route('docentes.show', $docente->id) }}" class="btn btn-info">Mostrar</a>  |
                        </td>
                        <td>
                            <a href="{{ route('docentes.delete', $docente->id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </table>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            {{ $docentes->links() }}
        </div>
    </div>
@endsection
