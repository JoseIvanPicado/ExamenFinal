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
                                <th scope="col">Nombre del cargo</th>
                                <th scope="col">Tipo de cargo</th>
                                <th scope="col">Nivel academico</th>
                                <th scope="col">Experiencia de trabajo</th>
                                <th scope="col">Requerimientos necesarios</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach ($charges as $charge)

                            <td>{{ $charge->name_chargues }}</td>
                            <td>{{ $charge->type_charges }}</td>
                            <td>{{ $charge->academic_level }}</td>
                            <td>{{ $charge->experience_work }}</td>
                            <td>{{ $charge->requeriments }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('charges.show', $charge->id) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('charges.edit', $charge->id) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('charges.destroy', $charge->id) }}" method="POST"
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
                        {{ $charges->links() }}
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection

