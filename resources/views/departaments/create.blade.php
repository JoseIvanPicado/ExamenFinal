@extends('layouts.panel')
@section('title', 'Departamentos/Crear')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card b-secondary shadow">

        <div class="card-header b-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0"><i class="fast fa-plus-circle"></i> Registrar Departamentos</h3>
                </div>

                <div class="col-4 text-right">
                    <a href="{{ route('departaments.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                </div>
            </div>

            <div class="card-body container-fluid">
                <form action="{{ route('departaments.store') }}" method="POST">
                    @csrf

                    @include('departaments.form')
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
