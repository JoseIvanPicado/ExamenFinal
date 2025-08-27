@extends('layouts.panel')
@section('title', 'Ausencias')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Ausencias</h3>
                        <a href="{{ route('absences.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Ausencia
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fa-solid fa-circle-user"> Nombre del empleado</i></th>
                                <th scope="col"><i class="fa-solid fa-circle-user"> Fecha de creacion</i></th>
                                <th scope="col"><i class="fas-solid fa-"></i> Fecha de la ausencia</th>
                                <th scope="col"><i class="fa-solid fa-"></i> Tipo de ausencia</th>
                                <th scope="col"><i class="fas-solid fa-hastag"></i> Razon de la ausencia</th>
                                <th scope="col"><i class="fa-solid fa-calendar-days"></i> Estado de la ausencia</th>
                                <th scope="col"><i class="fa-solid fa-calendar-days"></i> Registro de horas laborales</th>
                                <th scope="col"><i class="fa-solid fa-calendar-days"></i> Nombre del jefe a cargo</th>
                                <th scope="col"><i class="fa-solid fa"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absences as $absence)
                                <tr>
                                    <td> {{ $absence->employee->name }} </td>
                                    <td> {{ $absence->date_in }} </td>
                                    <td> {{ $absence->date_end }} </td>
                                    <td> {{ $absence->type }} </td>
                                    <td> {{ $absence->reasson }} </td>
                                    <td> {{ $absence->status }} </td>
                                    <td> {{ $absence->attendance_registration->hours_worked}} </td>
                                    <td> {{ $absence->boss->first_name}} </td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('absences.show', $absence->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('absences.edit', $absence->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('absences.destroy', $absence->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Esta seguro que desea eliminar esta ausencia? Esta acción no se puede deshacer.');">
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
                        {{ $absences->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
