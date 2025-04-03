@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h3>Editar Tratamiento</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('tratamientos.update', $tratamiento->id_tratamiento) }}" method="POST">
                @csrf @method('PUT')
                
                <div class="form-group">
                    <label>Nombre del Tratamiento:</label>
                    <input type="text" name="nombre_tratamiento" 
                           class="form-control @error('nombre_tratamiento') is-invalid @enderror" 
                           value="{{ old('nombre_tratamiento', $tratamiento->nombre_tratamiento) }}" required maxlength="200">
                    @error('nombre_tratamiento')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Descripción:</label>
                    <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" 
                              rows="3" required maxlength="50">{{ old('descripcion', $tratamiento->descripcion) }}</textarea>
                    @error('descripcion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Costo ($):</label>
                    <input type="number" name="costo" step="0.01" min="0"
                           class="form-control @error('costo') is-invalid @enderror" 
                           value="{{ old('costo', $tratamiento->costo) }}" required>
                    @error('costo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('tratamientos.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection