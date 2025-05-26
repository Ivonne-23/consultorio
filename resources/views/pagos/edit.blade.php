@extends('layouts.menu_dash')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Editar Pago</h1>
        <a href="{{ route('pagos.index') }}" class="btn btn-success mb-3">
            <i class="fas fa-arrow-left"></i> Regresar
        </a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('pagos.update', $pago->id_pago) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="monto" class="form-label">Monto ($)</label>
                        <input type="number" step="0.01" min="0" class="form-control" id="monto" name="monto" value="{{ old('monto', $pago->monto) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="forma_pago" class="form-label">Forma de Pago</label>
                        <input type="text" class="form-control" id="forma_pago" name="forma_pago" value="{{ old('forma_pago', $pago->forma_pago) }}" required maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_pago" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" value="{{ old('fecha_pago', $pago->fecha_pago) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_cita" class="form-label">Cita a pagar (Paciente)</label>
                        <select class="form-control" id="id_cita" name="id_cita" required>
                            <option value="">Seleccione una cita</option>
                            @foreach($citas as $cita)
                                <option value="{{ $cita->id_cita }}" 
                                    {{ (old('id_cita', $pago->id_cita) == $cita->id_cita) ? 'selected' : '' }}>
                                    {{ $cita->paciente->nombre ?? '' }} 
                                    {{ $cita->paciente->apellido_paterno ?? '' }} 
                                    {{ $cita->paciente->apellido_materno ?? '' }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
