@extends('layouts.panel')
@section('title','Registro de asistencia/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i>Ver Registro de asistencia</h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('attendance_registrations.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-list"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Departamento</h6>
                    <div class="pl-lg-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="hours_worked">
                                    <i class="fas fa-user"></i>Horas trabajadas
                                </label>
                                <p>{{ $attendance_registrations->hours_worked }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="employees_id">
                                    <i class="fas fa-user"></i>Nombre del empleado
                                </label>
                                <p>{{ $employees_id->name }}</p>
                            </div>
                        </div>
                    </div>

                   <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="charges_id">
                                    <i class="fas fa-user"></i>Cargo del empleado
                                </label>
                                <p>{{ $charges_id->name_charge }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="incidences_id">
                                    <i class="fas fa-user"></i>Incidencias del empleado
                                </label>
                                <p>{{ $incidences_id->type }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="incidences_id">
                                    <i class="fas fa-user"></i>Estado de incidencia
                                </label>
                                <p>{{ $incidences_id->status }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
