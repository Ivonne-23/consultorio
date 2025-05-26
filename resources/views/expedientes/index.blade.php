@extends('layouts.menu_dash')

@section('content')
    <h1 class="text-center mb-4">Expedientes</h1>

    <div class="container mt-4">
        <table class="table table-striped table-bordered text-center table-hover">
            <thead class="table-primary">
            <tr>
                <th>Paciente: </th>
                <th>Citas: </th>
            </tr>
            </thead>
            <tbody>
            @forelse($citas as $cita)
                <tr>
                    <td>
                        {{ $cita->paciente->nombre ?? '' }}
                        {{ $cita->paciente->apellido_paterno ?? '' }}
                        {{ $cita->paciente->apellido_materno ?? '' }}
                    </td>
                    <td>
                        {{ 'odontólogo(a): ' }}
                        {{ $cita->odontologo->nombre ?? '' }}
                        {{ $cita->odontologo->apellido_paterno ?? '' }}
                        {{ $cita->odontologo->apellido_materno ?? '' }}
                        <br>
                        {{ 'fecha cita: ' }}
                        {{ \Carbon\Carbon::parse($cita->fecha)->format('Y-m-d') ?? 'No disponible' }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No hay expedientes registrados.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
