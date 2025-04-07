@extends("layouts.app")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Citas</h1>
            <a href="{{ route('citas.create') }}" class="btn btn-success">Agregar Cita</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 p-4">
                <a href="{{ route('home') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
        @if(session('success'))
            <div class="row justify-content-center">
                <div class="col-4">
                    <p class="alert alert-success">{{ session('success') }}</p>
                </div>
            </div>
        @endif
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre del Paciente</th>
                    <th>Nombre del Odontólogo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($citas as $cita)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $cita->nombre_paciente }}</td>
                        <td>{{ $cita->nombre_odontologo }}</td>
                        <td>{{ \Carbon\Carbon::parse($cita->fecha)->format('Y-m-d') }}</td>
                        <td>{{ \Carbon\Carbon::parse($cita->hora)->format('H:i') }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a class="btn btn-warning" href="{{ route('citas.edit', $cita->id_cita) }}">Editar</a>
                                <form action="{{ route('citas.destroy', $cita->id_cita) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
