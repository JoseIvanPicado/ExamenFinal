<?php

namespace App\Exports;

use App\Models\Attendance_registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Attendance_registrationExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Attendance_registration::with(['employee', 'charge', 'incidence'])
            ->get()
            ->map(function ($attendance_registration) {
                return [
                    'ID'             => $attendance_registration->id,
                    'Fecha'          => $attendance_registration->creation_date,
                    'Hora entrada'   => $attendance_registration->time_in,
                    'Hora salida'    => $attendance_registration->time_exit,
                    'Horas trabajadas' => $attendance_registration->hours_worked,
                    'Horas extra'    => $attendance_registration->overtime,
                    'Empleado'       => $attendance_registration->employee->name ?? '',
                    'Cargo'          => $attendance_registration->charge->name ?? '',
                    'Incidencia'     => $attendance_registration->incidence->name ?? '',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Fecha',
            'Hora entrada',
            'Hora salida',
            'Horas trabajadas',
            'Horas extra',
            'Empleado',
            'Cargo',
            'Incidencia',
        ];
    }
}
