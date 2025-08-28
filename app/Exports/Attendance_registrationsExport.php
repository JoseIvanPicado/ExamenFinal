<?php

namespace App\Exports;

use App\Models\Attendance_registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Attendance_registrationsExport implements FromCollection, WithHeadings, WithStyles
{
    // Trae los registros con relaciones para que salga todo el nombre de empleado, cargo e incidencia
    public function collection()
    {
        return Attendance_registration::with(['employee', 'charge', 'incidence'])->get();
    }

    // Define los encabezados de las columnas
    public function headings(): array
    {
        return [
            'ID',
            'Fecha',
            'Hora Entrada',
            'Hora Salida',
            'Horas Trabajadas',
            'Horas Extra',
            'Empleado',
            'Cargo',
            'Incidencia',
        ];
    }

    // Mapear cada fila para mostrar la info deseada
    public function map($attendance): array
    {
        return [
            $attendance->id,
            $attendance->creation_date,
            $attendance->time_in,
            $attendance->time_exit,
            $attendance->hours_worked,
            $attendance->overtime,
            $attendance->employee->name ?? '',
            $attendance->charge->name ?? '',
            $attendance->incidence->reasson ?? '', // o 'name' si tu incidencia tiene ese campo
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
