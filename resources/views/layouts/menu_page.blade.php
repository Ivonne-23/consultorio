<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
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
    <div class="mt-auto pt-3">
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="nav-link text-white w-100 text-start bg-transparent border-0">
                <i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión
            </button>
        </form>
    </div>
</div>

<div class="col-md-10">
    <main class="py-4">
        @yield('content')
    </main>
</div>
</div>
</body>
</html>
