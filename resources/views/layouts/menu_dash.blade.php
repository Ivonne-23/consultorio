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
<div class="container-fluid">
    <div class="row">
        <!-- Menú lateral -->
        <div class="col-2 bg-primary text-white min-vh-100 d-flex flex-column p-3">
            <div class="text-center mb-4">
                <img src="{{ asset('img/login.jpg') }}" class="rounded-circle w-75 border border-3 border-white mb-2" alt="Logo Consultorio">
                <small class="text-white-50">Odontóloga</small>
            </div>

            <div class="nav flex-column">
                <a href="{{route('odontologos.index')}}" class="nav-link text-white py-2 {{ request()->routeIs('odontologos.index') ? 'bg-primary-dark' : '' }}">
                    <i class="bi bi-person-badge me-2"></i> Odontólogos
                </a>
                <a href="{{route('pacientes.index')}}" class="nav-link text-white py-2 {{ request()->routeIs('pacientes.index') ? 'bg-primary-dark' : '' }}">
                    <i class="bi bi-person-lines-fill me-2"></i> Pacientes
                </a>
                <a href="{{ route('citas.index') }}" class="nav-link text-white py-2 {{ request()->routeIs('citas.index') ? 'bg-primary-dark' : '' }}">
                    <i class="bi bi-calendar-check me-2"></i> Citas
                </a>
                <a href="{{ route('expedientes.index') }}" class="nav-link text-white py-2 {{ request()->routeIs('expedientes.*') ? 'bg-primary-dark' : '' }}">
                <i class="bi bi-journal-medical me-2"></i> Expedientes
                </a>
                <a href="{{route('tratamientos.index')}}" class="nav-link text-white py-2 {{ request()->routeIs('tratamientos.*') ? 'bg-primary-dark' : '' }}">
                    <i class="bi bi-clipboard2-pulse me-2"></i> Tratamientos
                </a>
                <a href="{{ route('tratamientos_pacientes.index') }}" class="nav-link text-white py-2 {{ request()->routeIs('tratamientos_pacientes.*') ? 'bg-primary-dark' : '' }}">
                <i class="bi bi-journal-medical me-2"></i> Tratamientos Asignados
                </a>
                      
                <a href="{{ route('pagos.index') }}" class="nav-link text-white py-2 {{ request()->routeIs('pagos.*') ? 'bg-primary-dark' : '' }}">
                <i class="bi bi-bar-chart me-2"></i> Pagos
                </a>

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
</div>
</body>
</html>
