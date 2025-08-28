<?php

namespace App\Exports;

use App\Models\Absence;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AbsencesExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        return Absence::with(['employee', 'attendance_registration', 'boss'])->get();
    }

    public function headings(): array
    {
                return [
                    'Empleado',
                    'Fecha inicio',
                    'Fecha fin',
                    'Tipo de ausencia',
                    'Razón',
                    'Estado',
                    'Registro asistencia',
                    'Jefe a cargo'
                ];
    }

    public function map($absence): array
    {
        return [
            $absence->employee->name ?? '',
            $absence->date_in,
            $absence->type,
            $absence->reasson,
            $absence->status,
            $absence->attendance_registration->hours_worked ?? '',
            $absence->boss->first_name ?? '',
        ];
    }

        public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:P1')->getFont()->setBold(true); // Encabezado en negrita
        $sheet->getStyle('A1:P1000')->getAlignment()->setWrapText(true); // Ajusta texto
        foreach (range('A', 'P') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true); // Auto ancho de columnas
        }
    }
}
