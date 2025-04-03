@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Agregar Nueva Cita</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{ route('citas.index') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-4">
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

    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('citas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre_paciente" class="form-label">Nombre del Paciente</label>
                    <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente"
                           value="{{ old('nombre_paciente') }}" required>
                </div>
                <div class="mb-3">
                    <label for="nombre_odontologo" class="form-label">Nombre del Odontólogo</label>
                    <input type="text" class="form-control" id="nombre_odontologo" name="nombre_odontologo"
                           value="{{ old('nombre_odontologo') }}" required>
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha"
                           value="{{ old('fecha') }}" required>
                </div>

                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" class="form-control" id="hora" name="hora"
                           value="{{ old('hora') }}" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar Cita</button>
            </form>
        </div>
    </div>

@endsection
