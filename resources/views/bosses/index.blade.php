@extends('layouts.panel')
@section('title', 'Jefes/Lista')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between algn-items-center">
                        <h3 class="mb-0">Jefes</h3>
                        <a href="{{ route('bosses.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Crear nuevo Jefe
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cedula de identificación</th>
                                <th scope="col">Número telefonico</th>
                                <th scope="col">Correo electronico</th>
                                <th scope="col">Nacionalidad</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Estado civil</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Número telefonico de emergencia</th>
                                <th scope="col">Nombre del contacto de emergencia</th>
                                <th scope="col">Fecha de contratacion en la empresa</th>
                                <th scope="col">Fecha de inicio en su puesto actual</th>
                                <th scope="col">Departamento a cargo</th>
                                <th scope="col">Personal a disposicion</th>
                                <th scope="col">Responsabilidad presupuestaria</th>
                                <th scope="col">Nivel educativo</th>
                                <th scope="col">Experiencia laboral</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Observaciones</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>

@foreach ($bosses as $boss)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary">{{ $boss->id }}</span>
                                    </td>
                                    <td>{{ $boss->first_name }}</td>
                                    <td>{{ $boss->last_name }}</td>
                                    <td>{{ $boss->identification }}</td>
                                    <td>{{ $boss->number_phone }}</td>
                                    <td>{{ $boss->mail }}</td>
                                    <td>{{ $boss->nacionality }}</td>
                                    <td>{{ $boss->years_old }}</td>
                                    <td>{{ $boss->gender }}</td>
                                    <td>{{ $boss->marital_states }}</td>
                                    <td>{{ $boss->adress }}</td>
                                    <td>{{ $boss->emergency_contact_phone }}</td>
                                    <td>{{ $boss->emergency_contact_name }}</td>
                                    <td>{{ $boss->hire_date }}</td>
                                    <td>{{ $boss->start_date_position }}</td>
                                    <td>{{ $boss->position }}</td>
                                    <td>{{ $boss->departament_charge }}</td>
                                    <td>{{ $boss->team_size }}</td>
                                    <td>{{ $boss->budget_responsibility }}</td>
                                    <td>{{ $boss->educative_level }}</td>
                                    <td>{{ $boss->work_experience }}</td>
                                    <td>
                                        @if ($employee->photo)
                                            <img src="{{ asset('storage/' . $employee->photo) }}" alt="Foto del empleado" width="50">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $employee->observations }}</td>
                                    <td>
                                        @if ($employee->status === 'active')
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-danger">Inactivo</span>
                                        @endif
                                    </td>

                                    <td style="withe-space: nowrap; display: align-items; center;">
                                        <a href="{{ route('bosses.show', $boss) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                           <i class="fas fa-eye"></i> Ver
                                        <a href="{{ route('bosses.edit', $boss) }}" class="btn btn-sm btn-primary" style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Editar
                                        </a>
                                        <form action="{{ route('bosses.destroy', $boss->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este empleado? Esta accion no se puede desahacer.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
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
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-ld-center">
                        {{ $bosses->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
