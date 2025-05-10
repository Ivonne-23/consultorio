@extends("layouts.menu_dash")

@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Pacientes</h1>
            <a href="{{ route('pacientes.create') }}" class="btn btn-success">Agregar Paciente</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 p-4">
                <a href="{{ route('home') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="row justify-content-center">
            <div class="col-4">
                <p class="alert alert-success">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->apellido_paterno }}</td>
                        <td>{{ $paciente->apellido_materno }}</td>
                        <td>{{ $paciente->direccion }}</td>
                        <td>{{ $paciente->telefono }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a class="btn btn-warning btn-sm" href="{{ route('pacientes.edit', $paciente->id_paciente) }}">Editar</a>
                                <form action="{{ route('pacientes.destroy', $paciente->id_paciente) }}" method="POST">
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
