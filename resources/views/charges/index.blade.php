@extends('layouts.panel')
@section('title', 'Cargo/Lista')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between algn-items-center">
                        <h3 class="mb-0">Cargos</h3>
                        <a href="{{ route('charges.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Crear nuevo cargo
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="Nombre del cargo"></th>
                                <th scope="Tipo de cargo"></th>
                                <th scope="Nivel academico"></th>
                                <th scope="Experiencia de trabajo"></th>
                                <th scope="Requerimientos necesarios"></th>
                            </tr>
                        </thead>
                        <tbody>
@foreach ($charges as $charge)
                            <tr>
                                <span class="badge badge-pill badge-primary">{{ $charge->id }}</span>
                            </td>
                            <td>{{ $charge->name_charge }}</td>
                            <td>{{ $charge->type_charge }}</td>
                            <td>{{ $charge->academic_level }}</td>
                            <td>{{ $charge->experience_works }}</td>
                            <td>{{ $charge->requeriments }}</td>

                            <td style="withe-space: nowrap; display: align-items; center;">
                                        <a href="{{ route('charges.show', $charge) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                           <i class="fas fa-eye"></i> Ver
                                        <a href="{{ route('charges.edit', $charge) }}" class="btn btn-sm btn-primary" style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Editar
                                        </a>
                                        <form action="{{ route('charges.destroy', $charge->id) }}" method="POST"
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
                        {{ $charges->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
