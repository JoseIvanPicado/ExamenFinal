<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoraryRequest extends FormRequest
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
            'employee_id' => 'required|exists:employees,id',

            'expected_input' => 'required',
            'expected_exit' => 'required',
            'overtime' => 'required',

            'departament_id' => 'required|exists:departaments,id',
            'boss_id' => 'required|exists:bosses,id'
        ];
    }

    public function messages(): array
    {
        return [
            'employee_id.required' => 'El empleado es obligatorio.',
            'employee_id.exists' => 'El empleado seleccionado no existe.',

            'expected_input.required' => 'La hora de entrada esperada es obligatoria.',
            'expected_input.date_format' => 'La hora de entrada esperada debe tener el formato AM:PM.',

            'expected_exit.required' => 'La hora de salida esperada es obligatoria.',
            'expected_exit.date_format' => 'La hora de salida esperada debe tener el formato AM:PM.',

            'overtime.required' => 'Las horas extras es obligatoria.',

            'departament_id.required' => 'El departamento es obligatorio',
            'departament_id.exists' => 'El departamento seleccionado no existe.',

            'boss_id.required' => 'El jefe es obligatorio.',
            'boss_id.exists' => 'El jefe seleccionado no existe.',
        ];
    }
}
