@extends('layouts.panel')
@section('title', 'Empleados/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header b-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Detalles del Empleado</h3>
                    </div>

                    <div class="col-4 text-right">
                        <a href="{{ route('employees.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Empleado</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                <i class="fas fa-user"></i> Nombre Completo
                                <label>
                                <p> {{ $employee->name }} {{ $employee->last_name }} </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="number_phone">
                                <i class="fas fa-hashtag"></i> Numero Telefonico
                                </label>
                                <p>{{ $employee->number_phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">
                                <i class="fas fa-envelope"></i> Correo Electrónico
                                </label>
                                <p>{{ $employee->mail }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="address">
                                <i class="fas fa-map-marker-alt"></i> Dirección
                                </label>
                                <p>{{ $employee->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="hire_date">
                                <i class="fas fa-calendar-alt"></i> Fecha de Contratación
                                </label>
                                <p>{{ $employee->hire_date }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="position">
                                <i class="fas fa-briefcase"></i> Cargo
                                </label>
                                <p>{{ $employee->position }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="departament">
                                <i class="fas fa-building"></i> Departamento
                                </label>
                                <p>{{ $employee->departament }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
@endsection
