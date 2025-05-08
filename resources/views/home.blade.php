@extends('layouts.menu_dash')
@section('content')
    <div class="container-fluid p-0">
            <div class="col-md-10 p-4">
                <h2 class="mb-4"><i class="bi bi-speedometer2 me-2"></i> Panel de Control</h2>
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
