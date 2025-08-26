@extends('layouts.panel')
@section('title', 'Empleados/Lista')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between algn-items-center">
                        <h3 class="mb-0">Empleados</h3>
                        <a href="{{ route('employees.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Crear nuevo Empleado
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Fecha de cumpleaños</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Estado civil</th>
                                <th scope="col">Número telefonico</th>
                                <th scope="col">Número de emergencia</th>
                                <th scope="col">Nombre de contacto para emergencias</th>
                                <th scope="col">Correo gmail</th>
                                <th scope="col">Nacionalidad</th>
                                <th scope="col">Nivel educativo</th>
                                <th scope="col">Cedula de identificación</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Fecha de contratacion</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

@foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->years_old }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->marital_status }}</td>
                                    <td>{{ $employee->number_phone }}</td>
                                    <td>{{ $employee->emergency_contact_phone }}</td>
                                    <td>{{ $employee->emergency_contact_name }}</td>
                                    <td>{{ $employee->mail }}</td>
                                    <td>{{ $employee->nacionality }}</td>
                                    <td>{{ $employee->educative_level }}</td>
                                    <td>{{ $employee->identification }}</td>
                                    <td>{{ $employee->adress }}</td>
                                    <td>{{ $employee->hire_date }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->departament }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Esta seguro que desea eliminar este trabajador? Esta acción no se puede deshacer.');">
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
                        {{ $employees->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection

