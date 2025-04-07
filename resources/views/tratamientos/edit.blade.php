@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-warning">Editar Tratamiento</h1>
        <a href="{{ route('tratamientos.index') }}" class="btn btn-success mb-3">
            <i class="fas fa-arrow-left"></i> Regresar
        </a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('tratamientos.update', $tratamiento->id_tratamiento) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nombre_tratamiento" class="form-label">Nombre del Tratamiento</label>
                        <input type="text" class="form-control" id="nombre_tratamiento" name="nombre_tratamiento"
                               value="{{ old('nombre_tratamiento', $tratamiento->nombre_tratamiento) }}" required maxlength="200">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"
                                  rows="3" required maxlength="50">{{ old('descripcion', $tratamiento->descripcion) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo ($)</label>
                        <input type="number" step="0.01" min="0" class="form-control" id="costo" name="costo"
                               value="{{ old('costo', $tratamiento->costo) }}" required>
                    </div>

                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection