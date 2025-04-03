@extends('layouts.app')

@section('content')
    <h1>Agregar Paciente</h1>
    <a href="{{ route('pacientes.index') }}" class="btn btn-primary">Regresar</a>

    <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" required>

        <label>Apellido Materno:</label>
        <input type="text" name="apellido_materno" required>

        <label>Dirección:</label>
        <input type="text" name="direccion" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required>

        <button type="submit">Guardar</button>
    </form>
@endsection
