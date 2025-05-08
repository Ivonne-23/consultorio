@extends('layouts.menu_dash')

@section('content')
    <h1>Expedientes</h1>

    <a href="{{ route('expedientes.create') }}" class="btn btn-primary">Agregar Expediente</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
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
        @foreach($expedientes as $expediente)
            <tr>
                <td>{{ $expediente->id_expediente }}</td>
                <td>{{ $expediente->paciente->nombre ?? 'N/A' }}</td>
                <td>{{ $expediente->odontologo->nombre ?? 'N/A' }}</td>
                <td>{{ $expediente->cita->fecha ?? 'N/A' }}</td>
                <td>{{ $expediente->tratamiento->nombre ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('expedientes.edit', $expediente->id_expediente) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('expedientes.destroy', $expediente->id_expediente) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
resources/views/expedientes/create.blade.php
php
Copiar
Editar
@extends('layouts.app')

@section('content')
    <h1>Agregar Expediente</h1>

    <form action="{{ route('expedientes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id_paciente">Paciente</label>
            <select name="id_paciente" id="id_paciente" class="form-control">
                <option value="">Seleccione un paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_odontologo">Odontólogo</label>
            <select name="id_odontologo" id="id_odontologo" class="form-control">
                <option value="">Seleccione un odontólogo</option>
                @foreach($odontologos as $odontologo)
                    <option value="{{ $odontologo->id }}">{{ $odontologo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_cita">Cita</label>
            <select name="id_cita" id="id_cita" class="form-control">
                <option value="">Seleccione una cita</option>
                @foreach($citas as $cita)
                    <option value="{{ $cita->id }}">{{ $cita->fecha }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_tratamiento">Tratamiento</label>
            <select name="id_tratamiento" id="id_tratamiento" class="form-control">
                <option value="">Seleccione un tratamiento</option>
                @foreach($tratamientos as $tratamiento)
                    <option value="{{ $tratamiento->id }}">{{ $tratamiento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
