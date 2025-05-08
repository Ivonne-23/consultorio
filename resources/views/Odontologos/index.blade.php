@extends('layouts.menu_dash')

@section('content')
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="alert alert-success">Listado de Expedientes</h1>
            <a href="{{ route('expedientes.create') }}" class="btn btn-success mb-3">
                <i class="fas fa-plus"></i> Nuevo Expediente
            </a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Paciente</th>
                    <th>Odontólogo</th>
                    <th>Cita</th>
                    <th>Tratamiento</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($expedientes as $expediente)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $expediente->paciente->nombre ?? 'N/A' }}</td>
                        <td>{{ $expediente->odontologo->nombre  }}</td>
                        <td>{{ $expediente->cita->fecha ?? 'N/A' }}</td>
                        <td>{{ $expediente->tratamiento->nombre ?? 'N/A' }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('expedientes.edit', $expediente->id_expediente) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="{{ route('expedientes.destroy', $expediente->id_expediente) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este expediente?')">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No hay expedientes registrados</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            {{ $expedientes->links() }}
        </div>
    </div>
@endsection
