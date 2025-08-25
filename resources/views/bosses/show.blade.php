@extends('layouts.panel')
@section('title', 'Jefes/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header b-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Detalles del Jefe</h3>
                    </div>

                    <div class="col-4 text-right">
                        <a href="{{ route('bosses.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Jefe a cargo</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="first_name">
                                <i class="fas fa-user"></i>Nombre Completo
                            </label>
                            <p>{{ $bosses->first_name }}</p>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="identification-card">
                                <i class="fas fa-id-card"></i> Cedula de identificación
                                </label>
                                <p>{{ $bosses->identification }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="number_phone">
                                <i class="fas fa-hashtag"></i> Numero Telefonico
                                </label>
                                <p>{{ $bosses->number_phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">
                                <i class="fas fa-envelope"></i> Correo Electrónico
                                </label>
                                <p>{{ $bosses->mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="address">
                                <i class="fas fa-map-marker-alt"></i> Dirección
                                </label>
                                <p>{{ $bosses->adress }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="hire_date">
                                <i class="fas fa-calendar-alt"></i> Fecha de Contratación
                                </label>
                                <p>{{ $bosses->hire_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="position">
                                <i class="fas fa-briefcase"></i> Cargo Actual
                                </label>
                                <p>{{ $bosses->position }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="departament_charge">
                                <i class="fas fa-building"></i> Departamento a cargo
                                </label>
                                <p>{{ $bosses->departament_charge }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="team_size">
                                <i class="fas fa-users"></i> Personal a disposición
                                </label>
                                <p>{{ $bosses->team_size }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="budget_responsibility">
                                <i class="fas fa-dollar-sign"></i> Responsabilidad presupuestaria
                                </label>
                                <p>{{ $bosses->budget_responsibility }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
