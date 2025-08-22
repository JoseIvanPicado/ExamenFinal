@extends('layouts.panel')
@section('title','Ausencia/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i>Ver Ausencia</h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('absences.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-list"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información de la Ausencia</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="date_end">
                                <i class="fas fa-user"></i>Fecha de la ausencia
                            </label>
                            <p>{{ $absences->date_end }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="reasson">
                                <i class="fas fa-user"></i>Razon de la ausencia
                            </label>
                            <p>{{ $absences->reasson }}</p>
                        </div>
                    </div>
                </div>

                   <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="status">
                                <i class="fas fa-user"></i>Estado de la ausencia
                            </label>
                            <p>{{ $absences->status }}</p>
                        </div>
                    </div>
                </div>

@endsection
