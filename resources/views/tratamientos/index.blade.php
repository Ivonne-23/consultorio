@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Listado de Tratamientos</h3>
                <a href="{{ route('tratamientos.create') }}" class="btn btn-light">
                    <i class="fas fa-plus"></i> Nuevo
                </a>
            </div>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
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
                                <div class="btn-group">
                                    <a href="{{ route('tratamientos.edit', $tratamiento->id_tratamiento) }}" 
                                       class="btn btn-sm btn-warning" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('tratamientos.destroy', $tratamiento->id_tratamiento) }}" 
                                          method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" 
                                                title="Eliminar" onclick="return confirm('¿Eliminar tratamiento?')">
                                            <i class="fas fa-trash"></i>
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
            </div>
        </div>
    </div>
</div>
@endsection