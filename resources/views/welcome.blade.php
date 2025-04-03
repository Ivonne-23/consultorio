@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="w-100 bg-info-subtle text-dark p-2">
            <div class="row align-items-center">
                <div class="col-2 ">
                    <h6><img src="{{ asset('img/logo.jpg') }}" class="rounded-circle" width="50" alt="Logo"> Diseñando Sonrisas</h6>
                </div>
                <div class="col">
                    <h6 class="text-center"><i class=" fa-solid fa-"></i> Tratamientos</h6>
                </div>
                <div class="col">
                    <h6><i class="fa-solid fa-phone"></i> Contacto</h6>
                </div>
                <div class="col">
                    <h6><i class="fa-solid fa-info"></i> Sobre nosotros</h6>
                </div>
                <div class="col-2 d-flex align-items-center">
                    <h6 class="nav-item p-2">
                        <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-user"></i> login</a></h6>

                </div>
             </div>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('img/imagen1.jpg') }}" class="d-block w-100 vh-100 object-fit-cover" alt="Imagen 1">
                    <div class="carousel-caption position-absolute top-50 start-50 translate-middle bg-dark bg-opacity-50 rounded p-4">
                        <h2 class="display-3 text-white fw-bold">DISEÑANDO SONRISAS</h2>
                        <h4 class="text-white ">"Diseña tu sonrisa, Diseña tu vida"</h4>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('img/sonrisados.jpg') }}" class="d-block w-100 vh-100 object-fit-cover" alt="Imagen 2">
                    <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/sonrisa.jpg') }}" class="d-block w-100 vh-100 object-fit-cover" alt="Imagen 3">
                </div>
            </div>
        </div>
        <div class="row bg-info-subtle text-dark py-5">
            <div class="col text-center">
                <h3>¿Quiénes somos?</h3>
                <h4 class="text-center p-4">Somos un equipo de odontologos especialisados,que se  comprometemos
                    con la salud bucal de las personas.Ofreciendo una amplia gama de servicios para cuidar tu sonrisa.</h4>
            </div>
        </div>
        <div class="container my-5">
            <h2 class="text-center text-dark mb-4">¿Qué ofrecemos?</h2>
            <div class="row justify-content-center">
                <div class="col-md-3 m-2 card text-white bg-primary p-4">
                    <h5 class="text-center">Diseño de sonrisa</h5>
                </div>
                <div class="col-md-3 m-2 card text-white bg-primary p-4">
                    <h5 class="text-center">Ortodoncia invisible</h5>
                </div>
                <div class="col-md-3 m-2 card text-white bg-primary p-4">
                    <h5 class="text-center">Endodoncia</h5>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-3 m-2 card text-white bg-primary p-4">
                    <h5 class="text-center">Limpieza dental</h5>
                </div>
                <div class="col-md-3 m-2 card text-white bg-primary p-4">
                    <h5 class="text-center">Coronas dentales</h5>
                </div>
                <div class="col-md-3 m-2 card text-white bg-primary p-4">
                    <h5 class="text-center">Resina dental</h5>
                </div>
            </div>
        </div>
        <div class="row bg-white text-center text-dark">
            <h2 class="text-center text-cons p-4">Informacion de contacto</h2>
            <div class="col-4 p-2 ">
                <h3><i class="fa-solid fa-location-dot"></i> Valle de Bravo</h3>
                <h5 class="text-secondary"> Artilleros del 47 #1242,Valle de Bravo,EDOMEX</h5>
            </div>
            <div class="col-4 p-2 ">
                <h3><i class="fa-solid fa-phone"></i> Telefono</h3>
                <h5 class="text-secondary"> 7218274033</h5>
            </div>
            <div class="col-4 p-2 ">
                <h3><i class="fa-solid fa-whatsapp"></i> WhatsApp</h3>
                <h5 class="text-secondary">+524433935191</h5>
            </div>
            <div class="row">
                <div class="col-4 p-2 ">
                    <h3><i class="fa-solid fa-envelope"></i>Correo</h3>
                    <h5 class="text-secondary">DiseñandoSonrisas@gmail.com</h5>
                </div>
                <div class="col-6 p-2 ">
                    <h3><i class="fa-solid fa-clock"></i> Horarios de Atencion  </h3>
                    <h5 class="text-secondary"> Lunes, Martes, Miércoles, Jueves, Viernes 09:00 - 14:00 a 15:30 - 19:00</h5>
                    <h5 class="text-secondary"> Sabado, Domingo: 10:00 - 14:00 a 15:30 - 17:00</h5>

                </div>

        </div>
            <div class="row p-2 bg-black ">
                <p class="text-white">&copy; 2025 Sonrisa Perfecta | Diseñando sonrisas.com</p>
            </div>
        </div>
    </div>
@endsection
