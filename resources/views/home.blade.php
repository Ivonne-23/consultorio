@extends('layouts.app')
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-2 bg-primary p-4 text-white vh-100">
                <div class="text-center mb-4">
                    <img src="{{ asset('img/logo.jpg') }}" class="rounded-circle w-75" alt="Logo Consultorio">
                </div>
                <h4 class="p-2"><i class="bi bi-house-door"></i> Inicio</h4>
                <h5 class="p-2"><a href="{{route('odontologos.index')}}" class="btn text-decoration-none" {{ request()->routeIs('odontologos.index')? 'active_custom':''}} text-white><i class="bi bi-person-badge"></i> Odontologos</a></h5>
                <h4 class="p-2"><a href="{{route('pacientes.index')}}" class="btn text-decoration-none" {{ request()->routeIs('pacientes.index')? 'active_custom':''}} text-white><i class="bi bi-person-lines-fill"></i> Pacientes</a></h4>
                <h4 class="p-2"><i class="bi bi-calendar-check"></i> Citas</h4>
                <h5 class="p-2"><i class="bi bi-file-earmark-medical"></i> Expedientes</h5>
                <h4 class="p-2"><i class="bi bi-bar-chart"></i> Pagos</h4>
                <h5 class="p-2"> <i class="bi bi-gear"></i> Pagos</h5>
                <h4 class="p-2 text-white">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="btn btn-text-decoration-none text-white">
                    <i class="bi bi-box-arrow-right"></i> Cerrar Sesión</button>
                </form>
                </h4>
            </div>
            <div class="col bg-light p-4">
                <div class="row mb-4">
                    <div class="col">
                        <h2 class="text-cons"><i class="bi bi-bar-chart-line"></i> Panel de Control</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 p-2">
                        <div class="card text-center text-white bg-info p-5">
                            <h5><i class="bi bi-person-badge"></i> Odontologos</h5>
                            <h3>5</h3>
                        </div>
                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card text-center text-white bg-info p-5">
                            <h5><i class="bi bi-person-lines-fill"></i> Pacientes</h5>
                            <h3>120</h3>
                        </div>
                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card text-center text-white bg-info p-5">
                            <h5><i class="bi bi-calendar-check"></i> Citas Hoy</h5>
                            <h3>15</h3>
                        </div>
                    </div>
                    <div class="col-md-3 p-2">
                        <div class="card text-center text-white bg-info p-5">
                            <h5><i class="bi bi-file-earmark-medical"></i> Expedientes</h5>
                            <h3>200</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 p-3">
                        <div class="card p-5">
                            <h3><i class="bi bi-bell"></i> Notificaciones Recientes</h3>
                            <ul class="list-group list-group-flush">
                                <h5><li class="list-group-item text-lg">Cita con Juan Pérez a las 10:00 AM</li></h5>
                                <h5><li class="list-group-item text-lg">Expediente de María López actualizado</li></h5>
                                <h5><li class="list-group-item text-lg">Nuevo paciente registrado: Carlos Méndez</li></h5>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="card p-5">
                            <h3><i class="bi bi-calendar2-week"></i> Próximas Citas</h3>
                            <table class="table table-lg">
                                <thead>
                                <tr>
                                    <th class="h5">Hora</th>
                                    <th class="h5">Paciente</th>
                                    <th class="h5">Doctor</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="h5">10:00 AM</td>
                                    <td class="h5">Juan Pérez</td>
                                    <td class="h5">Dr. Teresa</td>
                                </tr>
                                <tr>
                                    <td class="h5">11:30 AM</td>
                                    <td class="h5">Ricardo Hernández</td>
                                    <td class="h5">Dra. Ivonne</td>
                                </tr>
                                <tr>
                                    <td class="h5">02:00 PM</td>
                                    <td class="h5">Carlos Méndez</td>
                                    <td class="h5">Dra.Miranda</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
