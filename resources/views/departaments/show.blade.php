@extends('layouts.panel')
@section('title', 'Departamento/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i>Ver Departamento</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('departaments.index') }}" class= "btn btn-sm btn-primary">
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
                                <label class="form-control-label" for="name_departament">
                                    <i class="fas fa-user"></i>Nombre del departamento
                                </label>
                                <p>{{ $departaments->name_departament }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="location">
                                    <i class="fas fa-user"></i>Locacion del departamento
                                </label>
                                <p>{{ $departaments->location }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="description">
                                    <i class="fas fa-user"></i>Descripcion del departamento
                                </label>
                                <p>{{ $departaments->description }}</p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

@endsection
