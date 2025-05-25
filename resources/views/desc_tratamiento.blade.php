@extends('layouts.menu_page')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 bg-white rounded shadow p-4 d-flex align-items-center">
                <div class="col-md-5 text-center">
                    @if ($tratamiento->imagen)
                        <img src="{{ asset('storage/' . $tratamiento->imagen) }}"class="img-fluid rounded shadow" alt="Imagen de {{ $tratamiento->nombre_tratamiento }}">
                    @else
                        <p class="text-center">Sin imagen</p>
                    @endif
                </div>
                <div class="col-md-7 ps-md-5">
                    <h2 class="text-primary text-center">{{ $tratamiento->nombre_tratamiento }}</h2>
                    <hr>
                    <p><strong>Descripción: </strong> {{ $tratamiento->descripcion }} </p>
                    <p><strong>Costo: </strong> {{ $tratamiento->costo_formateado }} </p>

                    <a href="{{ route('tratamientos.index') }}" class="btn btn-primary mt-4">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection

