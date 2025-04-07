@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Listado de Tratamientos</h1>
        <a href="{{ route('tratamientos.create') }}" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i> Nuevo Tratamiento
        </a>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tratamientos as $tratamiento)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tratamiento->nombre_tratamiento }}</td>
                    <td>{{ Str::limit($tratamiento->descripcion, 30) }}</td>
                    <td>{{ $tratamiento->costo_formateado }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('tratamientos.edit', $tratamiento->id_tratamiento) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('tratamientos.destroy', $tratamiento->id_tratamiento) }}" 
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Eliminar este tratamiento?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No hay tratamientos registrados</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        
        {{ $tratamientos->links() }}
    </div>
</div>
@endsection