@extends('layouts.menu_dash')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Nueva Cita</h1>
            <a href="{{ route('citas.index') }}" class="btn btn-success mb-3">Regresar</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('citas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="id_paciente" class="form-label">Paciente</label>
                    <select name="id_paciente" id="id_paciente" class="form-select" required>
                        <option value="" disabled selected>Selecciona un paciente</option>
                        @foreach($pacientes as $paciente)
                            <option value="{{ $paciente->id_paciente }}">{{ $paciente->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_odontologo" class="form-label">Odontólogo</label>
                    <select name="id_odontologo" id="id_odontologo" class="form-select" required>
                        <option value="" disabled selected>Selecciona un odontólogo</option>
                        @foreach($odontologos as $odontologo)
                            <option value="{{ $odontologo->id_odontologo }}">{{ $odontologo->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}" required>
                </div>

                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" name="hora" id="hora" class="form-control" value="{{ old('hora') }}" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar Cita</button>
            </form>
        </div>
    </div>

@endsection
