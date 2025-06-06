@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="alert alert-success">Editar Odontólogo</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <a href="{{ route('odontologos.index') }}" class="btn btn-primary">Regresar</a>
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
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $odontologo->nombre) }}">
                </div>

                <div class="mb-3">
                    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno', $odontologo->apellido_paterno) }}">
                </div>

                <div class="mb-3">
                    <label for="apellido_materno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno', $odontologo->apellido_materno) }}">
                </div>

                <div class="mb-3">
                    <label for="especialidad" class="form-label">Especialidad</label>
                    <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{ old('especialidad', $odontologo->especialidad) }}">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

@endsection

