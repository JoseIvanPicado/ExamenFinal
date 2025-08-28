<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EmployeesExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::select([
        'name',
        'last_name',
        'years_old',
        'gender',
        'marital_status',
        'number_phone',
        'emergency_contact_phone',
        'emergency_contact_name',
        'mail',
        'nacionality',
        'educative_level',
        'identification',
        'adress',
        'hire_date',
        'position',
        'departament',
        ])->get();
    }

     public function headings(): array
    {
         return [
            'Nombre',
            'Apellido',
            'Fecha de nacimiento',
            'Género',
            'Estado civil',
            'Número telefónico',
            'Teléfono de emergencia',
            'Contacto de emergencia',
            'Correo',
            'Nacionalidad',
            'Nivel educativo',
            'Cédula',
            'Dirección',
            'Fecha de contratación',
            'Cargo',
            'Departamento'
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
