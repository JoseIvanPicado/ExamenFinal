<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Attendance_registrationRequest extends FormRequest
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
            'creation_date' => 'required|date',
            'time_in' => 'required',
            'time_exit' => 'required',
            'hours_worked' => 'required|integer',
            'overtime' => 'nullable|integer',
            'employees_id' => 'required|exists:employees,id',
            'charges_id' => 'required|exists:charges,id',
            'incidences_id' => 'required|exists:incidences,id'
        ];
    }

    public function messages(): array
    {
        return [
            'creation_date.required' => 'La fecha de creación es obligatoria.',
            'creation_date.date' => 'La fecha de creación debe ser una fecha válida.',

            'time_in.required' => 'La hora de entrada es obligatoria.',
            'time_in.integer' => 'La hora de entrada debe ser en número',

            'time_exit.required' => 'La hora de salida es obligatoria.',
            'time_exit.integer' => 'La hora de salida debe ser en número',

            'hours_worked.required' => 'Ingresar las horas trabajadas es obligatorios.',
            'hours_worked.integer' => 'Las horas trabajadas deben ser un número.',
            'hours_worked.min' => 'Las horas trabajadas no pueden ser negativas.',

            'overtime.integer' => 'El tiempo extra debe ser un número.',
            'overtime.nullable' => 'El tiempo extra es opcional.',

            'employees_id.required' => 'El nombre del empleado es obligatorio.',
            'employees_id.exists' => 'El empleado seleccionado no existe.',

            'charges_id.required' => 'El cargo es obligatorio.',
            'charges_id.exists' => 'El cargo seleccionado no existe.',

            'incidences_id.nullable' => 'La incidencia es obligatoria.',
            'incidences_id.exists' => 'La incidencia seleccionada no existe.',
        ];
    }
}
