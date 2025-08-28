<?php

namespace App\Exports;

use App\Models\Incidence;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IncidenceExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Incidence::with(['employee', 'departament', 'charge', 'boss'])
            ->get()
            ->map(function ($incidence) {
                return [
                    'ID'                  => $incidence->id,
                    'Empleado'            => $incidence->employee->name ?? '',
                    'Departamento'        => $incidence->departament->name_departament ?? '',
                    'Cargo'               => $incidence->charge->name_chargues ?? '',
                    'Fecha de creación'   => $incidence->creation_date,
                    'Tipo de incidencia'  => $incidence->type,
                    'Razón'               => $incidence->reasson,
                    'Penalización'        => $incidence->penalty,
                    'Acuerdo/Mediación'   => $incidence->mediation,
                    'Generado por'        => $incidence->generated_by,
                    'Estado'              => $incidence->status,
                    'Jefe a cargo'        => $incidence->boss->first_name ?? '',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Empleado',
            'Departamento',
            'Cargo',
            'Fecha de creación',
            'Tipo de incidencia',
            'Razón',
            'Penalización',
            'Acuerdo/Mediación',
            'Generado por',
            'Estado',
            'Jefe a cargo',
        ];
    }
}
