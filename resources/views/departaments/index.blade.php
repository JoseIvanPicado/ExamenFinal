@extends('layouts.panel')
@section('title', 'Departamentos')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Departamentos</h3>
                        <a href="{{ route('departaments.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Departamento
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fa-solid fa-circle-user"></i> Nombre de empleado</th>
                                <th scope="col"><i class="fa-solid fa-circle-user"></i> Nombre del departamento</th>
                                <th scope="col"><i class="fas-solid fa-"></i> Locacion del departamento</th>
                                <th scope="col"><i class="fa-solid fa-"></i> Estado del departamento</th>
                                <th scope="col"><i class="fas-solid fa-"></i> Capacidad de personal</th>
                                <th scope="col"><i class="fa-solid fa-circle-user"></i> Apellido del jefe a cargo</th>
                                <th scope="col"><i class="fa-solid fa-"></i> Cargo asignado</th>
                                <th scope="col"><i class="fa-solid fa"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departaments as $departament)
                                <tr>
                                    <td> {{ $departament->employee->name }} </td>
                                    <td> {{ $departament->name_departament }} </td>
                                    <td> {{ $departament->location }} </td>
                                    <td> {{ $departament->state }} </td>
                                    <td> {{ $departament->capacity_staff }} </td>
                                    <td> {{ $departament->boss->last_name }}</td>
                                    <td> {{ $departament->charge->name_chargues }}</td>


                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('departaments.show', $departament->id) }}"
                                            class="btn btn-primary btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('departaments.edit', $departament->id) }}"
                                            class="btn btn-info btn-sm" style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('departaments.destroy', $departament->id) }}"
                                            method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Esta seguro que desea eliminar este departamento? Esta acción no se puede deshacer.');">
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
                        {{ $departaments->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
