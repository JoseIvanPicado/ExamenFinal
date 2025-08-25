<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'years_old' => 'required|date',
            'gender' => 'required|string|max:10',
            'marital_status' => 'required|string|max:12',
            'number_phone' => ['required', 'string', 'min:8', 'max:10', Rule::unique('employees')->ignore($this->employee)],
            'emergency_contact_phone' => 'required|string|max:10',
            'emergency_contact_name' => 'required|string|max:255',
            'mail' => ['required', 'string', 'max:255', Rule::unique('employees')->ignore($this->employee)],
            'nacionality' => 'required|string|max:100',
            'educative_level' => 'required|string|max:100',
            'identification' => ['required', 'string', 'max:16', Rule::unique('employees')->ignore($this->employee)],
            'adress' => 'required|string|max:500',
            'hire_date' => 'required|date',
            'position' => 'required|string|max:100',
            'departament' => 'required|string|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe contener solo caracteres.',
            'name.min' => 'El nombre tiene un minimo de 2 caracteres.',
            'name.max' => 'El nombre tiene un máximo de 255 caracteres.',

            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.string' => 'El apellido debe contener solo caracteres.',
            'last_name.min' => 'El apellido tiene un minimo de 5 caracteres.',
            'last_name.max' => 'El apellido tiene un máximo de 255 caracteres.',

            'years_old.required' => 'La fecha de nacimiento es obligatoria.',
            'years_old.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'years_old.before_or_equal' => 'La fecha de nacimiento no puede ser una fecha futura.',

            'gender.required' => 'El género es obligatorio.',
            'gender.string' => 'El género debe contener solo caracteres.',
            'gender.min' => 'El género tiene un minimo de 2 caracteres.',
            'gender.max' => 'El género tiene un máximo de 12 caracteres.',

            'civil_status.required' => 'El estado civil es obligatorio.',
            'civil_status.in' => 'El estado civil debe ser uno de los siguientes: soltero, casado, divorciado, viudo.',

            'number_phone.required' => 'El número de teléfono es obligatorio.',
            'number_phone.string' => 'El número de teléfono debe contener solo caracteres.',
            'number_phone.max' => 'El número de teléfono tiene un máximo de 9 caracteres.',
            'number_phone.unique' => 'El número de teléfono ya está en uso.',

            'emergency_contact_phone.required' => 'El teléfono de contacto de emergencia es obligatorio.',
            'emergency_contact_phone.string' => 'El teléfono de contacto de emergencia debe contener solo caracteres.',
            'emergency_contact_phone.max' => 'El teléfono de contacto de emergencia tiene un máximo de 10 caracteres.',

            'emergency_contact_name.required' => 'El nombre del contacto de emergencia es obligatorio.',
            'emergency_contact_name.string' => 'El nombre del contacto de emergencia debe contener solo caracteres.',
            'emergency_contact_name.min' => 'El nombre del contacto de emergencia debe contener un minimo de 2 caracteres.',
            'emergency_contact_name.max' => 'El nombre del contacto de emergencia tiene un máximo de 255 caracteres.',

            'mail.required' => 'El correo electrónico es obligatorio.',
            'mail.string' => 'El correo electrónico debe contener solo caracteres.',
            'mail.max' => 'El correo electrónico tiene un máximo de 255 caracteres.',
            'mail.unique' => 'El correo electrónico ya está en uso.',

            'nacionality.required' => 'La nacionalidad es obligatoria.',
            'nacionality.string' => 'La nacionalidad debe contener solo caracteres.',
            'nacionality.min' => 'La nacionalidad tiene un minimo de 2 caracteres.',
            'nacionality.max' => 'La nacionalidad tiene un máximo de 100 caracteres.',

            'educative_level.required' => 'El nivel educativo es obligatorio.',
            'educative_level.string' => 'El nivel educativo debe contener solo caracteres.',
            'educative_level.min' => 'El nivel educativo tiene un minimo de 8 caracteres.',
            'educative_level.max' => 'El nivel educativo tiene un máximo de 100 caracteres.',

            'identification.required' => 'La identificación es obligatoria.',
            'identification.string' => 'La identificación debe contener solo caracteres.',
            'identification.max' => 'La identificación tiene un máximo de 10 caracteres.',
            'identification.unique' => 'La identificación ya está en uso.',

            'adress.required' => 'La dirección es obligatoria.',
            'adress.text' => 'La dirección debe contener solo caracteres.',
            'adress.min' => 'La dirección tiene un minimo de 10 caracteres.',
            'adress.max' => 'La dirección tiene un máximo de 500 caracteres.',

            'hire_date.required' => 'La fecha de contratación es obligatoria.',
            'hire_date.date' => 'La fecha de contratación debe ser una fecha válida.',
            'hire_date.before_or_equal' => 'La fecha de contratación no puede ser una fecha futura.',

            'position.required' => 'La posición es obligatoria.',
            'position.string' => 'La posición debe contener solo caracteres.',
            'position.max' => 'La posición tiene un máximo de 100 caracteres.',

            'departament.required' => 'El departamento es obligatorio.',
            'departament.string' => 'El departamento seleccionado debe contener solo caracteres.',
            'departament.max' => 'El departamento tiene un máximo de 50 caracteres.',
        ];
    }
}
