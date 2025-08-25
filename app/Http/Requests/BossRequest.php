<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BossRequest extends FormRequest
{
    /**
     * Determiná si el usuario está autorizado para realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtenga las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'identification' => ['required', 'string', 'max:16', Rule::unique('bosses')->ignore($this->boss)],
            'number_phone' => ['required', 'string', 'max:10', Rule::unique('bosses')->ignore($this->boss)],
            'mail' => ['required', 'string', 'max:255', Rule::unique('bosses')->ignore($this->boss)],
            'nacionality' => 'required|string|max:100',
            'years_old' => 'required|date',
            'gender' => 'required|string|max:10',
            'marital_states' => 'required|string|max:12',
            'adress' => 'required|max:500',
            'emergency_contact_phone' => 'required|string|max:9',
            'emergency_contact_name' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'start_date_position' => 'required|date',
            'position' => 'required|string|max:30',
            'departament_charge' => 'required|string|max:50',
            'team_size' => 'required|integer',
            'budget_responsibility' => 'required|numeric',
            'educative_level' => 'required|string|max:50',
            'work_experience' => 'nullable|string|max:500',
            'photo' => 'nullable|image|max:2048',
            'observations' => 'nullable|string',
            'status' => 'required|string|max:10|in:active,inactive',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'El nombre es obligatorio.',
            'first_name.string' => 'El nombre debe contener solo caracteres.',
            'first_name.min' => 'El nombre tiene un minimo de 2 caracteres.',
            'first_name.max' => 'El nombre tiene un máximo de 255 caracteres.',

            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.string' => 'El apellido debe contener solo caracteres.',
            'last_name.min' => 'El apellido tiene un minimo de 2 caracteres.',
            'last_name.max' => 'El apellido tiene un máximo de 255 caracteres.',

            'identification.required' => 'La identificación es obligatoria.',
            'identification.string' => 'La identificación debe contener solo caracteres.',
            'identification.max' => 'La identificación tiene un máximo de 16 caracteres.',
            'identification.unique' => 'La identificación ya está en uso.',

            'number_phone.required' => 'El número de teléfono es obligatorio.',
            'number_phone.string' => 'El número de teléfono debe contener solo caracteres.',
            'number_phone.max' => 'El número de teléfono tiene un máximo de 8 caracteres.',
            'number_phone.unique' => 'El número de teléfono ya está en uso.',

            'mail.required' => 'El correo electrónico es obligatorio.',
            'mail.email' => 'El correo electrónico debe ser una dirección válida.',
            'mail.max' => 'El correo electrónico tiene un máximo de 255 caracteres.',
            'mail.unique' => 'El correo electrónico ya está en uso.',

            'nacionality.required' => 'La nacionalidad es obligatoria.',
            'nacionality.string' => 'La nacionalidad debe contener solo caracteres.',
            'nacionality.max' => 'La nacionalidad tiene un máximo de 100 caracteres.',

            'years_old.required' => 'La fecha de nacimiento es obligatoria.',
            'years_old.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'years_old.before_or_equal' => 'La fecha de nacimiento no puede ser una fecha futura.',

            'gender.required' => 'El género es obligatorio.',
            'gender.string' => 'El género debe contener solo caracteres.',
            'gender.min' => 'El género tiene un minimo de 7 caracteres.',
            'gender.max' => 'El género tiene un máximo de 10 caracteres.',

            'marital_states.required' => 'El estado civil es obligatorio.',
            'marital_states.string' => 'El estado civil debe contener solo caracteres.',
            'marital_states.max' => 'El estado civil tiene un máximo 12',

            'adress.required' => 'La dirección es obligatoria.',
            'adress.max' => 'La dirección tiene un máximo de 500 caracteres.',

            'emergency_contact_phone.required' => 'El teléfono de contacto de emergencia es obligatorio.',
            'emergency_contact_phone.string' => 'El teléfono de contacto de emergencia debe contener solo caracteres.',
            'emergency_contact_phone.max' => 'El teléfono de contacto de emergencia tiene un máximo de 8 caracteres.',

            'emergency_contact_name.required' => 'El nombre del contacto de emergencia es obligatorio.',
            'emergency_contact_name.string' => 'El nombre del contacto de emergencia debe contener solo caracteres.',
            'emergency_contact_name.max' => 'El nombre del contacto de emergencia tiene un máximo de 255 caracteres.',

            'hire_date.required' => 'La fecha de contratación es obligatoria.',
            'hire_date.date' => 'La fecha de contratación debe ser una fecha válida.',
            'hire_date.before_or_equal' => 'La fecha de contratación no puede ser una fecha futura.',

            'start_date_position.required' => 'La fecha de inicio de su posición es obligatoria.',
            'start_date_position.date' => 'La fecha de inicio de posición debe ser una fecha válida.',
            'start_date_position.before_or_equal' => 'La fecha de inicio de posición no puede ser una fecha futura.',

            'position.required' => 'La posición es obligatoria.',
            'position.string' => 'La posición debe contener solo caracteres.',
            'position.max' => 'La posición tiene un máximo de 30 caracteres.',

            'departament_charge.required' => 'El departamento a cargo es obligatorio.',
            'departament_charge.string' => 'El departamento a cargo debe contener solo caracteres.',
            'departament_charge.max' => 'El departamento a cargo tiene un máximo de 50 caracteres.',

            'team_size.required' => 'El tamaño del equipo es obligatorio.',
            'team_size.integer' => 'El tamaño del equipo debe ser un número entero.',

            'bogget_responsibility.required' => 'La responsabilidad presupuestaria es obligatoria.',
            'bogget_responsibility.numeric' => 'La responsabilidad presupuestaria debe ser un número.',

            'educative_level.required' => 'El nivel educativo es obligatorio.',
            'educative_level.string' => 'El nivel educativo debe contener solo caracteres.',
            'educative_level.max' => 'El nivel educativo tiene un máximo de 50 caracteres.',

            'work_experience.required' => 'La experiencia laboral es obligatoria.',
            'work_experience.string' => 'La experiencia laboral debe contener solo caracteres.',
            'work_experience.max' => 'La experiencia laboral tiene un máximo de 500 caracteres.',

            'photo.image' => 'La foto debe ser una imagen válida.',
            'photo.max' => 'La foto no puede exceder los 2 MB.',

            'observations.string' => 'Las observaciones deben contener solo caracteres.',
            'observations.max' => 'Las observaciones tienen un máximo de 500 caracteres.',

            'status.required' => 'El estado es obligatorio.',
            'status.string' => 'El estado debe contener solo caracteres.',
            'status.max' => 'El estado tiene un máximo de 10 caracteres.',
            'status.in' => 'El estado debe ser uno de los siguientes: active, inactive',
        ];
    }
}
