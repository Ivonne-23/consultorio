@extends('layouts.menu_dash')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Nuevo Expediente</h1>
            <a href="{{ route('expedientes.index') }}" class="btn btn-success mb-3">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('expedientes.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="id_paciente" class="form-label">Paciente</label>
                            <select name="id_paciente" class="form-control" required>
                                <option value="">Seleccione un paciente</option>
                                @foreach($pacientes as $paciente)
                                    <option value="{{ $paciente->id }}" {{ old('id_paciente') == $paciente->id ? 'selected' : '' }}>
                                        {{ $paciente->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_odontologo" class="form-label">Odontólogo</label>
                            <select name="id_odontologo" class="form-control" required>
                                <option value="">Seleccione un odontólogo</option>
                                @foreach($odontologos as $odontologo)
                                    <option value="{{ $odontologo->id }}" {{ old('id_odontologo') == $odontologo->id ? 'selected' : '' }}>
                                        {{ $odontologo->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_cita" class="form-label">Cita</label>
                            <select name="id_cita" class="form-control" required>
                                <option value="">Seleccione una cita</option>
                                @foreach($citas as $cita)
                                    <option value="{{ $cita->id }}" {{ old('id_cita') == $cita->id ? 'selected' : '' }}>
                                        {{ $cita->fecha }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_tratamiento" class="form-label">Tratamiento</label>
                            <select name="id_tratamiento" class="form-control" required>
                                <option value="">Seleccione un tratamiento</option>
                                @foreach($tratamientos as $tratamiento)
                                    <option value="{{ $tratamiento->id }}" {{ old('id_tratamiento') == $tratamiento->id ? 'selected' : '' }}>
                                        {{ $tratamiento->nombre }}
                                    </option>
                                @endforeach
                            </select>
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
