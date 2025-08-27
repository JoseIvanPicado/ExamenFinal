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
                                <th scope="col"><i class="fas fa-user"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-user"></i> Apellido</th>
                                <th scope="col"><i class="fas fa-id-card"></i> Cédula de identificación</th>
                                <th scope="col"><i class="fas fa-phone"></i> Número telefónico</th>
                                <th scope="col"><i class="fas fa-envelope"></i> Correo electrónico</th>
                                <th scope="col"><i class="fas fa-flag"></i> Nacionalidad</th>
                                <th scope="col"><i class="fas fa-birthday-cake"></i> Fecha de nacimiento</th>
                                <th scope="col"><i class="fas fa-venus-mars"></i> Género</th>
                                <th scope="col"><i class="fas fa-heart"></i> Estado civil</th>
                                <th scope="col"><i class="fas fa-map-marker-alt"></i> Dirección</th>
                                <th scope="col"><i class="fas fa-phone-square-alt"></i> Número telefónico de emergencia</th>
                                <th scope="col"><i class="fas fa-user-friends"></i> Contacto de emergencia</th>
                                <th scope="col"><i class="fas fa-calendar-alt"></i> Fecha de contratación en la empresa</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de inicio en su puesto actual</th>
                                <th scope="col"><i class="fas fa-briefcase"></i> Posición en la empresa</th>
                                <th scope="col"><i class="fas fa-building"></i> Departamento a cargo</th>
                                <th scope="col"><i class="fas fa-users"></i> Personal a disposición</th>
                                <th scope="col"><i class="fas fa-coins"></i> Responsabilidad presupuestaria</th>
                                <th scope="col"><i class="fas fa-graduation-cap"></i> Nivel educativo</th>
                                <th scope="col"><i class="fas fa-clipboard-list"></i> Experiencia laboral</th>
                                <th scope="col"><i class="fas fa-camera"></i> Foto</th>
                                <th scope="col"><i class="fas fa-sticky-note"></i> Observaciones</th>
                                <th scope="col"><i class="fas fa-toggle-on"></i> Estado</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

@foreach ($bosses as $boss)
                                <tr>
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
                                        @if ($boss->photo)
                                            <img src="{{ asset('storage/' . $boss->photo) }}" alt="Foto del jefe" width="50">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $boss->observations }}</td>
                                    <td>
                                        @if ($boss->status === 'active')
                                            <span class="badge badge-success">Activo</span>
                                        @else
                                            <span class="badge badge-danger">Inactivo</span>
                                        @endif
                                    </td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('bosses.show', $boss->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('bosses.edit', $boss->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('bosses.destroy', $boss->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Esta seguro que desea eliminar este jefe de area? Esta acción no se puede deshacer.');">
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
                        {{ $bosses->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection

