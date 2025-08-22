<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChargeRequest extends FormRequest
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
            'name_charge' => 'required|string|max:255',
            'type_charge' => 'required|string|max:40',
            'academic_level' => 'required|string|max:80',
            'experience_works' => 'required|string|max:500',
            'requeriments' => 'required|string|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'name_charge.required' => 'El nombre del cargo es obligatorio.',
            'name_charge.string' => 'El nombre del cargo debe contener solo caracteres.',
            'name_charge.max' => 'El nombre del cargo tiene un máximo de 255 caracteres.',

            'type_charge.required' => 'El tipo de cargo es obligatorio.',
            'type_charge.string' => 'El tipo de cargo debe contener solo caracteres.',
            'type_charge.max' => 'El tipo de cargo tiene un máximo de 40 caracteres.',

            'academic_level.required' => 'La calificación específica es obligatoria.',
            'academic_level.string' => 'La calificación específica debe contener solo caracteres.',
            'academic_level.max' => 'La calificación específica tiene un máximo de 80 caracteres.',

            'experience_works.required' => 'La experiencia laboral es obligatoria.',
            'experience_works.string' => 'La experiencia laboral debe contener solo caracteres.',
            'experience_works.max' => 'La experiencia laboral tiene un máximo de 500 caracteres.',

            'requeriments.required' => 'Los requerimientos son obligatorios.',
            'requeriments.string' => 'Los requerimientos deben contener solo caracteres.',
            'requeriments.max' => 'Los requerimientos tienen un máximo de 500 caracteres.',
        ];
    }
}
