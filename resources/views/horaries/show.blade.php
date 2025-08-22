@extends('layouts.panel')
@section('title','Horario/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i>Ver Horario</h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('horaries.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-list"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información del horario</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="expected_input" class="form-control-label">
                                <i class="fas fa-user">Hora de entrada</i>
                            </label>
                            <p>{{ $horaries->expected_input }}</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="expected_exit">
                                <i class="fas fa-user"></i>Hora de salida
                            </label>
                            <p>{{ $horaries->expected_exit }}</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>

@endsection
