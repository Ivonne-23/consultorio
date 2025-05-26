@extends('layouts.menu_page')

@section('content')
    <div class="container-fluid p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('img/sonrisa.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Imagen 1">
                    <div class="carousel-caption position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-50 rounded p-4">
                        <h2 class="display-3 text-white fw-bold">DISEÑANDO SONRISAS</h2>
                        <h4 class="text-white">"Diseña tu sonrisa, Diseña tu vida"</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/muela.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagen1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Imagen 3">
                </div>
            </div>
        </div>
        <div class="row bg-info-subtle text-dark py-5">
            <div class="col text-center">
                <h3>¿Quiénes somos?</h3>
                <h4 class="text-center p-4">
                    Somos un equipo de odontólogos especializados, comprometidos con la salud bucal de las personas, ofreciendo una amplia gama de servicios para cuidar tu sonrisa.
                </h4>
            </div>
        </div>
        <div class="container my-5 bg-body-secondary p-4">
            <h1 class="text-center text-dark mb-4">Odontólogos</h1>
            <div class="row justify-content-center">
                @forelse ($odontologos as $odontologo)
                    <div class="col-md-auto mb-4">
                        <div class="card bg-primary text-white" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $odontologo->imagen) }}"
                                 class="card-img-top mx-auto mt-3"
                                 alt="Imagen de {{ $odontologo->nombre }}"
                                 style="width: 200px; height: 200px; object-fit: cover; border-radius: 8px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $odontologo->nombre }} {{ $odontologo->apellido_paterno }} {{ $odontologo->apellido_materno }}</h5>
                                <p class="card-text">{{ $odontologo->Especialidad ?? 'Sin especialidad' }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No hay odontólogos registrados.</p>
                @endforelse
            </div>
        </div>
        <div class="container my-5">
            <h2 class="text-center text-dark mb-4">¿Qué ofrecemos?</h2>
            <div class="row justify-content-center">
                @forelse ($tratamientos as $tratamiento)
                    <div class="col-md-3 m-2">
                        <a href="{{ route('tratamientos.show', $tratamiento->id_tratamiento) }}"
                           class="card text-white bg-primary p-4 text-decoration-none text-center"
                           style="cursor:pointer;">
                            <h5>{{ $tratamiento->nombre_tratamiento }}</h5>
                        </a>
                    </div>
                @empty
                    <p>No hay tratamientos disponibles.</p>
                @endforelse
            </div>
        </div>
        <div class="row bg-white text-center text-dark">
            <h2 class="text-center p-4">Información de contacto</h2>
            <div class="col-4 p-2">
                <h3><i class="fa-solid fa-location-dot"></i> Valle de Bravo</h3>
                <h5 class="text-secondary">Artilleros del 47 #1242, Valle de Bravo, EDOMEX</h5>
            </div>
            <div class="col-4 p-2">
                <h3><i class="fa-solid fa-phone"></i> Teléfono</h3>
                <h5 class="text-secondary">7218274033</h5>
            </div>
            <div class="col-4 p-2">
                <h3><i class="fa-solid fa-whatsapp"></i> WhatsApp</h3>
                <h5 class="text-secondary">+52 4433935191</h5>
            </div>
        </div>
        <div class="row bg-light text-dark">
            <div class="col-4 p-2">
                <h3><i class="fa-solid fa-envelope"></i> Correo</h3>
                <h5 class="text-secondary">DiseñandoSonrisas@gmail.com</h5>
            </div>
            <div class="col-6 p-2">
                <h3><i class="fa-solid fa-clock"></i> Horarios de Atención</h3>
                <h5 class="text-secondary">Lunes a Viernes: 09:00 - 14:00 y 15:30 - 19:00</h5>
                <h5 class="text-secondary">Sábados y Domingos: 10:00 - 14:00 y 15:30 - 17:00</h5>
            </div>
        </div>
        <div class="row p-2 bg-black">
            <p class="text-white text-center m-0">&copy; 2025 Sonrisa Perfecta | DiseñandoSonrisas.com</p>
        </div>
    </div>
@endsection
