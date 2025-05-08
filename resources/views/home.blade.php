@extends('layouts.menu_dash')

@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <!-- Panel de Control -->
            <div class="col-md-12 p-4">
                <h2 class="mb-4 text-center"> Panel de Control</h2>

                <!-- Fila de estadísticas (Odontólogos, Pacientes, Citas Hoy) -->
                <div class="row mb-4">
                    <!-- Odontólogos -->
                    <div class="col-md-4 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-person-badge fs-1 mb-3"></i>
                                <h5 class="card-title">Odontólogos</h5>
                                <h3 class="mb-0">{{ $odontologos }}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Pacientes -->
                    <div class="col-md-4 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-person-lines-fill fs-1 mb-3"></i>
                                <h5 class="card-title">Pacientes</h5>
                                <h3 class="mb-0">{{ $pacientes }}</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Citas Hoy -->
                    <div class="col-md-4 mb-3">
                        <div class="card bg-info text-white h-100">
                            <div class="card-body text-center py-4">
                                <i class="bi bi-calendar-check fs-1 mb-3"></i>
                                <h5 class="card-title">Citas Hoy</h5>
                                <h3 class="mb-0">{{ $citasHoy }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fila de Próximas Citas -->
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0"><i class="bi bi-calendar2-week me-2"></i> Próximas Citas</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Fecha y Hora</th>
                                            <th>Paciente</th>
                                            <th>Odontólogo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($proximasCitas as $cita)
                                            <tr>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($cita->fecha)->format('d/m/Y') }}<br>
                                                    <small class="text-muted">{{ \Carbon\Carbon::createFromFormat('H:i:s', $cita->hora)->format('h:i A') }}</small>
                                                </td>
                                                <td>{{ $cita->nombre_paciente }}</td>
                                                <td>Dr(a). {{ $cita->nombre_odontologo }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center text-muted">No hay próximas citas registradas.</td>
                                            </tr>
                                        @endforelse
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
        .table-responsive {
            max-height: 400px;
            overflow-y: auto;
        }
        .col-md-4, .col-md-12 {
            padding: 15px;
        }

        @media (max-width: 767px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
@endsection
