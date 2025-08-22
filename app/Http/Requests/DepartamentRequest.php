<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'employees_id' => 'required',
            'name_departament' => 'required|string|max:80',
            'location' => 'required|string|max:100',
            'description' => 'required|string|max:500',
            'responsible_employee' => 'required|string|max:255',
            'state' => 'required|string|max:30',
            'capacity_staff' => 'required|integer',

            'bosses_id' => 'required',
            'charges_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'employees_id.required' => 'El empleado asignado es obligatorio.',

            'name_departament.required' => 'El nombre del departamento es obligatorio.',
            'name_departament.string' => 'El nombre del departamento debe contener solo caracteres.',
            'name_departament.max' => 'El nombre del departamento tiene un máximo de 80 caracteres.',

            'location.required' => 'La ubicación es obligatoria.',
            'location.string' => 'La ubicación debe contener solo caracteres.',
            'location.max' => 'La ubicación tiene un máximo de 100 caracteres.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe contener solo caracteres.',
            'description.max' => 'La descripción tiene un máximo de 500 caracteres.',

            'responsible_employee.required' => 'El empleado responsable es obligatorio.',
            'responsible_employee.string' => 'El empleado responsable debe contener solo caracteres.',
            'responsible_employee.max' => 'El empleado responsable tiene un máximo de 255 caracteres.',

            'state.required' => 'El estado del departamento es obligatorio.',
            'state.string' => 'El estado del departamento debe contener solo caracteres.',
            'state.max' => 'El estado del departamento tiene un máximo de 30 caracteres.',

            'capacity_staff.required' => 'La capacidad de personal a cargo es obligatoria.',
            'capacity_staff.integer' => 'La capacidad de personal a cargo debe ser un número entero.',

            'bosses_id.required' => 'El jefe asignado es obligatorio.',

            'charges_id.required' => 'El cargo asignado es obligatorio.',
        ];
    }
}
