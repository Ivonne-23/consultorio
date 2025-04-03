@extends('layouts.app')

@section('content')
    <h1>Editar Paciente</h1>
    <a href="{{ route('pacientes.index') }}" class="btn btn-primary">Regresar</a>

    <form action="{{ route('pacientes.update', $paciente->id_paciente) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" value="{{ $paciente->nombre }}" required>
        <input type="text" name="apellido_paterno" value="{{ $paciente->apellido_paterno }}" required>
        <input type="text" name="apellido_materno" value="{{ $paciente->apellido_materno }}" required>
        <input type="text" name="direccion" value="{{ $paciente->direccion }}" required>
        <input type="text" name="telefono" value="{{ $paciente->telefono }}" required>

        <button type="submit">Actualizar</button>
    </form>
@endsection
