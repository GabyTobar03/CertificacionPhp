@extends('layouts.app')

@section('content')
    @if (session('success'))
    <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('docentes_grupos.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <label for="docente_id" class="form-label">Docente</label>
                <select name="docente_id" class="form-control" required>
                    <option value="">Seleccione un docente</option>
                    @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}">{{ $docente->nombre }} {{ $docente->apellido }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="sumit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('docentes_grupos.create') }}" class="btn btn-secundary">Ir a crear</a>
            </div>
        </div>
    </form>

    <table class="table table-striper">
        <thead>
            <tr>
                <th>Docentes</th>
                <th>Grupos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentesGrupos as $docenteGrupo)
            <tr>
                <td>{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}</td>
                <td>{{ $docenteGrupo->grupo->nombre }}</td>
                <td>
                    <table>
                        <td>
                            <a href="{{ route('docentes_grupos.edit', $docenteGrupo->id) }}"
                                class="btn btn-warning">Editar</a> |
                        </td>
                        <td>
                            <a href="{{ route('docentes_grupos.show', $docenteGrupo->id) }}"
                                class="btn btn-info">Mostrar</a> |
                        </td>
                        <td>
                            <a href="{{ route('docentes_grupos.delete', $docenteGrupo->id) }}"
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
            {{ $docentesGrupos->links() }}
        </div>
    </div>
@endsection
