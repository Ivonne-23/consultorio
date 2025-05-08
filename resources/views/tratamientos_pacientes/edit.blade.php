@extends('layouts.menu_dash')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <h1 class="alert alert-warning">Editar Asignación</h1>
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
                <form action="{{ route('tratamientos_pacientes.update', $asignacion->id_asignacion) }}" method="POST">
                    @csrf @method('PUT')

                    <div class="mb-3">
                        <label for="id_paciente" class="form-label">Paciente</label>
                        <select class="form-select" name="id_paciente" required>
                            @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->id }}" {{ $asignacion->id_paciente == $paciente->id ? 'selected' : '' }}>
                                    {{ $paciente->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_tratamiento" class="form-label">Tratamiento</label>
                        <select class="form-select" name="id_tratamiento" required>
                            @foreach($tratamientos as $tratamiento)
                                <option value="{{ $tratamiento->id_tratamiento }}" {{ $asignacion->id_tratamiento == $tratamiento->id_tratamiento ? 'selected' : '' }}>
                                    {{ $tratamiento->nombre_tratamiento }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_odontologo" class="form-label">Odontólogo</label>
                        <select class="form-select" name="id_odontologo" required>
                            @foreach($odontologos as $odontologo)
                                <option value="{{ $odontologo->id }}" {{ $asignacion->id_odontologo == $odontologo->id ? 'selected' : '' }}>
                                    {{ $odontologo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                        <input type="date" class="form-control" name="fecha_inicio" value="{{ $asignacion->fecha_inicio }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                        <input type="date" class="form-control" name="fecha_fin" value="{{ $asignacion->fecha_fin }}" required>
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
