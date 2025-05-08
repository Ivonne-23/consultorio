@extends('layouts.menu_dash')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-warning">Editar Expediente</h1>
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
                <form action="{{ route('expedientes.update', $expediente->id_expediente) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="id_paciente" class="form-label">ID Paciente</label>
                        <input type="number" name="id_paciente" class="form-control" value="{{ old('id_paciente', $expediente->id_paciente) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_odontologo" class="form-label">ID Odontólogo</label>
                        <input type="number" name="id_odontologo" class="form-control" value="{{ old('id_odontologo', $expediente->id_odontologo) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_cita" class="form-label">ID Cita</label>
                        <input type="number" name="id_cita" class="form-control" value="{{ old('id_cita', $expediente->id_cita) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_tratamiento" class="form-label">ID Tratamiento</label>
                        <input type="number" name="id_tratamiento" class="form-control" value="{{ old('id_tratamiento', $expediente->id_tratamiento) }}" required>
                    </div>

                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
