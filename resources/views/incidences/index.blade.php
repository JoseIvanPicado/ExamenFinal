@extends('layouts.panel')
@section('title', 'Incidencias')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Incidencias</h3>
                        <a href="{{ route('incidences.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Incidencia
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col"><i class="fas fa-user"></i> Nombre de empleado</th>
                            <th scope="col"><i class="fas fa-building"></i> Departamento</th>
                            <th scope="col"><i class="fas fa-id-badge"></i> Cargo</th>
                            <th scope="col"><i class="fas fa-calendar"></i> Fecha de creación</th>
                            <th scope="col"><i class="fas fa-triangle-exclamation"></i> Tipo de incidencia</th>
                            <th scope="col"><i class="fas fa-comment-dots"></i> Razón</th>
                            <th scope="col"><i class="fas fa-ban"></i> Penalización</th>
                            <th scope="col"><i class="fas fa-handshake"></i> Acuerdo</th>
                            <th scope="col"><i class="fas fa-user-pen"></i> Generado por</th>
                            <th scope="col"><i class="fas fa-toggle-on"></i> Estado</th>
                            <th scope="col"><i class="fas fa-user-tie"></i> Jefe responsable</th>
                            <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($incidences as $incidence)
                                <tr>

                                    <td> {{ $incidence->employee->name }} </td>
                                    <td> {{ $incidence->departament->name_departament }} </td>
                                    <td> {{ $incidence->charge->name_chargues }} </td>
                                    <td> {{ $incidence->creation_date }} </td>
                                    <td> {{ $incidence->type }} </td>
                                    <td> {{ $incidence->reasson }} </td>
                                    <td> {{ $incidence->penalty }} </td>
                                    <td> {{ $incidence->mediation }} </td>
                                    <td> {{ $incidence->generated_by }} </td>
                                    <td> {{ $incidence->status }} </td>
                                    <td> {{ $incidence->boss->first_name }} </td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('incidences.show', $incidence->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('incidences.edit', $incidence->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('incidences.destroy', $incidence->id) }}" method="POST"
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
                        {{ $incidences->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
