<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidenceRequest extends FormRequest
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
            'departament_id' => 'required',
            'charge_id' => 'required|exists:charges,id',
            'creation_date' => 'required|date',
            'type' => 'required|string|max:50',
            'reasson' => 'required|string|max:500',
            'penalty' => 'required|string|max:255',
            'mediation' => 'required|string|max:100',
            'generated_by' => 'required|string|max:100',
            'status' => 'required|string|max:100',
            'boss_id' => 'required|exists:bosses,id',
        ];
    }

    public function messages(): array
    {
        return [
            'employee_id.required' => 'El empleado es obligatorio.',
            'employee_id.exists' => 'El empleado seleccionado no existe.',

            'departament_id.required' => 'El departamento es obligatorio.',
            'departament_id.exists' => 'El departamento seleccionado no existe.',

            'charge_id.required' => 'El cargo es obligatorio.',
            'charge_id.exists' => 'El cargo seleccionado no existe.',

            'creation_date.required' => 'La fecha de creación es obligatoria.',
            'creation_date.date' => 'La fecha de creación debe ser una fecha válida.',

            'name_incidence.required' => 'El nombre de la incidencia es requerido.',
            'name_incidence.string' => 'El nombre de incidencia debe ser una cadena de caracteres.',
            'name_incidence.min' => 'El nombre de incidencia debe contener minimo 5 caracteres.',

            'type.required' => 'El tipo de incidencia es obligatorio.',
            'type.string' => 'El tipo de incidencia debe ser una cadena de caracteres.',
            'type.max' => 'El tipo de incidencia no puede exceder los 50 caracteres.',

            'reasson.required' => 'La descripción de la incidencia es obligatoria.',
            'reasson.string' => 'La descripción de la incidencia debe ser una cadena de caracteres.',
            'reasson.max' => 'La descripción no puede exceder los 500 caracteres.',

            'penalty.required' => 'La penalización es obligatoria.',
            'penalty.string' => 'La penalización debe ser una cadena de caracteres.',
            'penalty.max' => 'La penalización no puede exceder los 255 caracteres.',

            'mediation.required' => 'La mediación es obligatoria.',
            'mediation.string' => 'La mediación debe ser una cadena de caracteres.',
            'mediation.max' => 'La mediación no puede exceder los 100 caracteres.',

            'generated_by.required' => 'El empleado que genero el reporte es requerido.',
            'generated_by.string' => 'El empleado que genero el reporte debe ser una cadena de caracteres.',
            'generated_by.max' => 'El empleado genero el reporte no puede exceder los 100 caracteres.',

            'status.required' => 'El estado de la incidencia es obligatorio.',
            'status.string' => 'El estado de la incidencia debe ser una cadena de caracteres.',
            'status.max' => 'El empleado genero el reporte no puede exceder los 100 caracteres.',

            'bosses_id.required' => 'El jefe asignado es obligatorio.',
            'bosses_id.exists' => 'El jefe seleccionado no existe.',
        ];
    }
}
