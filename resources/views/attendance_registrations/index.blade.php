@extends('layouts.panel')
@section('title', 'Registro de asistencia')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Registro</h3>
                        <a href="{{ route('attendance_registrations.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo registro
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-calendar-plus"></i> Fecha de creación</th>
                                <th scope="col"><i class="fas fa-clock"></i> Hora de entrada</th>
                                <th scope="col"><i class="fas fa-clock"></i> Hora de salida</th>
                                <th scope="col"><i class="fas fa-hourglass-half"></i> Horas trabajadas</th>
                                <th scope="col"><i class="fas fa-stopwatch"></i> Horas extras</th>
                                <th scope="col"><i class="fas fa-user"></i> Nombre del empleado</th>
                                <th scope="col"><i class="fas fa-briefcase"></i> Nombre del cargo</th>
                                <th scope="col"><i class="fas fa-exclamation-triangle"></i> Incidencias</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendance_registrations as $attendance_registration)
                                <tr>

                                    <td> {{ $attendance_registration->creation_date }} </td>
                                    <td> {{ $attendance_registration->time_in }} </td>
                                    <td> {{ $attendance_registration->time_exit }} </td>
                                    <td> {{ $attendance_registration->hours_worked }} </td>
                                    <td> {{ $attendance_registration->overtime }} </td>
                                    <td> {{ $attendance_registration->employee->name }} </td>
                                    <td> {{ $attendance_registration->charge->name_chargues }} </td>
                                    <td> {{ $attendance_registration->incidence->type }} </td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('attendance_registrations.show', $attendance_registration->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('attendance_registrations.edit', $attendance_registration->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('attendance_registrations.destroy', $attendance_registration->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Esta seguro que desea eliminar esta asistencia? Esta acción no se puede deshacer.');">
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
                        {{ $attendance_registrations->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection

