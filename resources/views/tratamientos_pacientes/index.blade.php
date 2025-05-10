@extends('layouts.menu_dash')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <h1 class="alert alert-success">Listado de Asignaciones de Tratamientos</h1>
        <a href="{{ route('tratamientos_pacientes.create') }}" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i> Nueva Asignación
        </a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Paciente</th>
                    <th>Tratamiento</th>
                    <th>Odontólogo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($asignaciones as $asignacion)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $asignacion->paciente->nombre ?? 'N/A' }}</td>
                    <td>{{ $asignacion->tratamiento->nombre_tratamiento ?? 'N/A' }}</td>
                    <td>{{ $asignacion->odontologo->nombre ?? 'N/A' }}</td>
                    <td>{{ $asignacion->fecha_inicio }}</td>
                    <td>{{ $asignacion->fecha_fin }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('tratamientos_pacientes.edit', $asignacion->id_asignacion) }}"
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('tratamientos_pacientes.destroy', $asignacion->id_asignacion) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Eliminar esta asignación?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No hay asignaciones registradas</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{ $asignaciones->links() }}
    </div>
</div>
@endsection
