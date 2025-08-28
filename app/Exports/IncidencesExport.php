<?php

namespace App\Exports;

use App\Models\Incidence;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class IncidencesExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        return Incidence::with(['employee', 'departament', 'charge', 'boss'])->get();
    }

    public function headings(): array
    {

        return [
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

    public function map($incidence): array
    {
        return [
            $incidence->employee->name ?? '',
            $incidence->departament->name_departament ?? '',
            $incidence->charge->name_chargues ?? '',
            $incidence->creation_date,
            $incidence->type,
            $incidence->reasson,
            $incidence->penalty,
            $incidence->mediation,
            $incidence->generated_by,
            $incidence->status,
            $incidence->boss->first_name ?? '',
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
