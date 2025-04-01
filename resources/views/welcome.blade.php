@extends('layouts.app')
@section('content')
    <div class="container mg-2  ">
        <div class="col p-2 bg bg-primary">
            <div class="col p-2  text-dark ">
                <div class="row text-center">
                    <div class="col">
                        <h5><img src="{{asset("img/logo.jpg")}}" class=" rounded-circle w-80 mx-auto "alt="foto"> Diseñando Sonrisas</h5>
                    </div>
                    <div class="col">
                        <h5><i class="fa-solid fa-home text-center"></i> Inicio</h5>
                    </div>
                    <div class="col">
                        <h5><i class="fa-solid fa-phone "></i> Contacto</h5>
                    </div>
                    <div class="col">
                        <h5><i class="fa-solid fa-info "></i> Sobre nosotros</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-white">
            <div class="row text-dark">
                <div class=" text-center ">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/sonrisa.jpg')}}" class="d-block w-100 vh-100" alt="...">
                                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                                    <h1 class="display-1 text-dark">DISEÑANDO</h1>
                                    <h1 class="display-1 text-light">SONRISAS</h1>
                                    <h4 class="text-light">"Diseña tu sonrisa Diseña tu vida"</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/sonrisa.jpg')}}" class="d-block w-100 vh-100" alt="...">
                                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                                    <h1 class="display-1 text-light">DISEÑANDO</h1>
                                    <h1 class="display-1 text-light">SONRISAS</h1>
                                    <h4 class="text-light">"Diseña tu sonrisa Diseña tu vida"</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/sonrisa.jpg')}}" class="d-block w-100 vh-100" alt="...">
                                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                                    <h1 class="display-1 text-light">DISEÑANDO</h1>
                                    <h1 class="display-1 text-light">SONRISAS</h1>
                                    <h4 class="text-light">"Diseña tu sonrisa Diseña tu vida"</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            <div class="row bg-cons text-white">
                <h3 class="text-center p-4">¿Quienes somos?</h3>
                <h5 class=" p-4 text-center">En diseñamos sonrias somos un equipo de dentistas y especialistas  comprometido con la salud bucal de nuestros pacientes, ofreciendo una amplia gama de servicios para satisfacer todas sus necesidades dentales.</h5>
            </div>
            <div class="row bg-white text-white">
                <h2 class="text-center  text-dark p-4">¿Que ofrecemos?</h2>
                <div class="row p-4">
                    <div class=" text-center col-2 p-3 ms-3 card  card-body  bg bg-primary">
                        <h5>Diseño de sonrisa</h5>
                    </div>
                    <div class=" text-center col-2 p-3 ms-3 card  card-body  bg bg-primary">
                        <h5>Ortodoncia invisible</h5>
                    </div>
                    <div class=" text-center col-2 p-3 ms-3 card  card-body  bg bg-primary">
                        <h5>Endodoncia</h5>
                    </div>
                </div>
                <div class="row p-4">
                    <div class=" text-center col-2 p-3 ms-3 card  card-body  bg bg-primary">
                        <h5>Limpieza dental</h5>
                    </div>
                    <div class=" text-center col-2 p-3 ms-3 card  card-body  bg bg-primary">
                        <h5>Coronas dentales</h5>
                    </div>
                    <div class=" text-center col-2 p-3 ms-3 card  card-body  bg bg-primary">
                        <h5>Resina dental</h5>
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
                        <h3><i class="fa-solid fa-envelope"></i>cCorreo</h3>
                        <h5 class="text-secondary">DiseñandoSonrisas@gmail.com</h5>
                    </div>
                    <div class="col-6 p-2 ">
                        <h3><i class="fa-solid fa-clock"></i> Horarios de Atencion  </h3>
                        <h5 class="text-secondary"> Lunes, Martes, Miércoles, Jueves, Viernes 09:00 - 14:00 a 15:30 - 19:00</h5>
                        <h5 class="text-secondary"> Sabado, Domingo: 10:00 - 14:00 a 15:30 - 17:00</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
