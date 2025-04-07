@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Menú lateral -->
            <div class="col-md-2 bg-primary p-3 text-white vh-100 sticky-top">
                <div class="text-center mb-4">
                    <img src="{{ asset('img/login.jpg') }}" class="rounded-circle w-75 border border-3 border-white mb-2" alt="Logo Consultorio">
                    <h4 class="mb-0">{{ Auth::user()->name }}</h4>
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
                    <a href="#" class="nav-link text-white py-2">
                        <i class="bi bi-file-earmark-medical me-2"></i> Expedientes
                    </a>
                    <a href="{{route('tratamientos.index')}}" class="nav-link text-white py-2 {{ request()->routeIs('tratamientos.*') ? 'bg-primary-dark' : '' }}">
                        <i class="bi bi-clipboard2-pulse me-2"></i> Tratamientos
                    </a>
                    <a href="#" class="nav-link text-white py-2">
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

            <!-- Contenido principal -->
            <div class="col-md-10 p-4">
                <h2 class="mb-4"><i class="bi bi-speedometer2 me-2"></i> Panel de Control</h2>
                
                <!-- Tarjetas resumen -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-person-badge fs-1 mb-3"></i>
                                <h5 class="card-title">Odontólogos</h5>
                                <h3 class="mb-0">5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-person-lines-fill fs-1 mb-3"></i>
                                <h5 class="card-title">Pacientes</h5>
                                <h3 class="mb-0">120</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-calendar-check fs-1 mb-3"></i>
                                <h5 class="card-title">Citas Hoy</h5>
                                <h3 class="mb-0">15</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-file-earmark-medical fs-1 mb-3"></i>
                                <h5 class="card-title">Expedientes</h5>
                                <h3 class="mb-0">200</h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Notificaciones y Citas -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="bi bi-bell me-2"></i> Notificaciones Recientes</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="fw-bold">Cita con Juan Pérez</span>
                                            <small class="text-muted">10:00 AM</small>
                                        </div>
                                        <small class="text-muted">Recordatorio de cita</small>
                                    </div>
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="fw-bold">Expediente actualizado</span>
                                            <small class="text-muted">María López</small>
                                        </div>
                                        <small class="text-muted">Nuevos registros</small>
                                    </div>
                                    <div class="list-group-item border-0 py-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="fw-bold">Nuevo paciente</span>
                                            <small class="text-muted">Carlos Méndez</small>
                                        </div>
                                        <small class="text-muted">Registro completado</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="bi bi-calendar2-week me-2"></i> Próximas Citas</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Hora</th>
                                                <th>Paciente</th>
                                                <th>Doctor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>10:00 AM</td>
                                                <td>Juan Pérez</td>
                                                <td>Dr. Teresa</td>
                                            </tr>
                                            <tr>
                                                <td>11:30 AM</td>
                                                <td>Ricardo Hernández</td>
                                                <td>Dra. Ivonne</td>
                                            </tr>
                                            <tr>
                                                <td>02:00 PM</td>
                                                <td>Carlos Méndez</td>
                                                <td>Dra. Miranda</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-primary-dark {
            background-color: rgba(0,0,0,0.1) !important;
            border-radius: 5px;
        }
        .nav-link {
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background-color: rgba(0,0,0,0.1) !important;
            border-radius: 5px;
        }
        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endsection
