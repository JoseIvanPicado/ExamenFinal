<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbsenceRequest extends FormRequest
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
            'employee_id' => 'required',
            'date_in' => 'required|date',
            'date_end' => 'required|date|after_or_equal:date_in',
            'type' => 'required|string|max:50',
            'reason' => 'required|string|max:500',
            'status' => 'required',
            'attendance_registrations_id' => 'required',
            'bosses_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'employee_id.required' => 'El nombre del empleado es obligatorio.',
            'employee_id.exists' => 'El empleado seleccionado no existe.',

            'date_in.required' => 'La fecha de inicio es obligatoria.',
            'date_in.date' => 'La fecha de inicio debe ser una fecha válida.',

            'date_end.required' => 'La fecha de finalización es obligatoria.',
            'date_end.date' => 'La fecha de finalización debe ser una fecha válida.',
            'date_end.after_or_equal' => 'La fecha de finalización debe ser igual o posterior a la fecha de inicio.',

            'type.required' => 'El tipo de ausencia es obligatorio.',
            'type.string' => 'El tipo de ausencia debe ser una cadena de caracteres.',
            'type.max' => 'El tipo de ausencia no puede exceder los 50 caracteres.',

            'reason.required' => 'El motivo de la ausencia es obligatorio.',
            'reason.string' => 'El motivo debe ser una cadena de caracteres.',
            'reason.max' => 'El motivo no puede exceder los 500 caracteres.',

            'status.required' => 'El estado es obligatorio.',
            'status.in' => 'El estado debe ser uno de los siguientes: pendiente, aprobado, rechazado.',

            'attendance_registrations_id.required' => 'El nombre del departamento es obligatorio.',
            'attendance_registrations_id.exists' => 'El nombre del departamento seleccionado no existe.',

            'bosses_id.required' => 'El nombre del jefe es obligatorio.',
            'bosses_id.exists' => 'El nombre del jefe seleccionado no existe.',
        ];

    }
}
