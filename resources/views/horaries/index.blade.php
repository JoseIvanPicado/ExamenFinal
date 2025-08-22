@extends('layouts.panel')
@section('title', 'Horarios')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Horarios</h3>
                        <a href="{{ route('horaries.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo horario
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fa-solid fa-circle-user"> Nombre del empleado</i></th>
                                <th scope="col"><i class="fas-solid fa-"></i> Hora de entrada</th>
                                <th scope="col"><i class="fa-solid fa-"></i> Hora de salida</th>
                                <th scope="col"><i class="fas-solid fa-"></i> Horas extras laboradas</th>
                                <th scope="col"><i class="fa-solid fa-"></i> Nombre del departamento asignado</th>
                                <th scope="col"><i class="fa-solid fa-"></i> Nombre del jefe a cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($horaries as $horary)
                                <tr>

                                    <td> {{ $horary->employees->name }} </td>
                                    <td> {{ $horary->expected_input }} </td>
                                    <td> {{ $horary->expected_exit }} </td>
                                    <td> {{ $horary->over_time }} </td>
                                    <td> {{ $horary->departaments->name_departament }} </td>
                                    <td> {{ $horary->bosses->first_name }} </td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('horaries.show', $horaries->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('horaries.edit', $horaries->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('horaries.destroy', $horaries->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Esta seguro que desea eliminar esta incidencia? Esta acción no se puede deshacer.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn tn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $horaries->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
