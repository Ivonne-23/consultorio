@extends('layouts.menu_dash')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <h1 class="alert alert-success">Nueva Asignación de Tratamiento</h1>
        <a href="{{ route('tratamientos_pacientes.index') }}" class="btn btn-success mb-3">
            <i class="fas fa-arrow-left"></i> Regresar
        </a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('tratamientos_pacientes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="id_paciente" class="form-label">Paciente</label>
                        <select class="form-select" name="id_paciente" required>
                            <option value="">Seleccione un paciente</option>
                            @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->id }}" {{ old('id_paciente') == $paciente->id ? 'selected' : '' }}>
                                    {{ $paciente->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_tratamiento" class="form-label">Tratamiento</label>
                        <select class="form-select" name="id_tratamiento" required>
                            <option value="">Seleccione un tratamiento</option>
                            @foreach($tratamientos as $tratamiento)
                                <option value="{{ $tratamiento->id_tratamiento }}" {{ old('id_tratamiento') == $tratamiento->id_tratamiento ? 'selected' : '' }}>
                                    {{ $tratamiento->nombre_tratamiento }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_odontologo" class="form-label">Odontólogo</label>
                        <select class="form-select" name="id_odontologo" required>
                            <option value="">Seleccione un odontólogo</option>
                            @foreach($odontologos as $odontologo)
                                <option value="{{ $odontologo->id }}" {{ old('id_odontologo') == $odontologo->id ? 'selected' : '' }}>
                                    {{ $odontologo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio" value="{{ old('fecha_inicio') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                        <input type="date" class="form-control" name="fecha_fin" value="{{ old('fecha_fin') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
