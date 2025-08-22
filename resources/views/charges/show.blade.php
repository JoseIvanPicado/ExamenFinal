@extends('layouts.panel')
@section('title', 'Cargos/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header b-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Detalles de los cargos</h3>
                    </div>

                    <div class="col-4 text-right">
                        <a href="{{ route('charges.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del cargo</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name_chargues">
                                <i class="fas fa-user"></i> Nombre del cargo
                                <label>
                                <p> {{ $charges->name_chargues }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="type_charges">
                                <i class="fas fa-user"></i> Tipo de cargo
                                <label>
                                <p> {{ $charges->type_charges }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="academic_level">
                                <i class="fas fa-user"></i> Nivel academico
                                <label>
                                <p> {{ $charges->academic_level }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="experience_work">
                                <i class="fas fa-user"></i> Experiencia de trabajo
                                <label>
                                <p> {{ $charges->experience_work }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="requeriments">
                                <i class="fas fa-user"></i> Requerimientos necesarios
                                <label>
                                <p> {{ $charges->requeriments }}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
