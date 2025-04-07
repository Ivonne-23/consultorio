@extends("layouts.menu_dash")
@section("content")
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Odontólogos</h1>
            <a href="{{ route('odontologos.create') }}" class="btn btn-success">Agregar Odontólogo</a>
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
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Especialidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($odontologos as $odontologo)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $odontologo->nombre }}</td>
                        <td>{{ $odontologo->apellido_paterno }}</td>
                        <td>{{ $odontologo->apellido_materno }}</td>
                        <td>{{ $odontologo->Especialidad }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a class="btn btn-warning" href="{{ route('odontologos.edit', $odontologo->id_odontologo) }}">Editar</a>
                                <form action="{{ route('odontologos.destroy', $odontologo->id_odontologo) }}" method="POST">
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
