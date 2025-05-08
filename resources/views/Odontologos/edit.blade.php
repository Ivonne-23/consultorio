@extends('layouts.menu_dash')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-8 ">
            <h1 class="alert alert-success bg-info-subtle">Editar Odontólogo</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{ route('odontologos.index') }}" class="btn bg-info-subtle">Regresar</a>
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
            <form action="{{ route('odontologos.update', $odontologo->id_odontologo) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $odontologo->nombre) }}" required>
                </div>
                <div class="mb-3">
                    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno', $odontologo->apellido_paterno) }}" required>
                </div>
                <div class="mb-3">
                    <label for="apellido_materno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno', $odontologo->apellido_materno) }}" required>
                </div>
                <div class="mb-3">
                    <label for="Especialidad" class="form-label">Especialidad</label>
                    <input type="text" class="form-control" id="Especialidad" name="Especialidad" value="{{ old('Especialidad', $odontologo->Especialidad) }}" required>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="imagen" value="{{ old('imagen', $odontologo->imagen) }}" required>
                </div>
                <button type="submit" class="btn bg-info-subtle">Actualizar</button>
            </form>
        </div>
    </div>
@endsection
