<?php

namespace App\Exports;

use App\Models\Absence;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AbsenceExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Absence::with(['employee', 'attendance_registration', 'boss'])
            ->get()
            ->map(function ($absence) {
                return [
                    'ID'                     => $absence->id,
                    'Empleado'               => $absence->employee->name ?? '',
                    'Fecha inicio'           => $absence->date_in,
                    'Fecha fin'              => $absence->date_end,
                    'Tipo de ausencia'       => $absence->type,
                    'Razón'                  => $absence->reasson,
                    'Estado'                 => $absence->status,
                    'Registro asistencia'    => $absence->attendance_registration->creation_date ?? '',
                    'Jefe a cargo'           => $absence->boss->first_name ?? '',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Empleado',
            'Fecha inicio',
            'Fecha fin',
            'Tipo de ausencia',
            'Razón',
            'Estado',
            'Registro asistencia',
            'Jefe a cargo',
        ];
    }
}
