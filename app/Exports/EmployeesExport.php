<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeesExport implements FromCollection
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
        'civil_status',
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
        ]);
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
}
