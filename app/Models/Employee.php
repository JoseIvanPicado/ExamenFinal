<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';

    protected $fillable = [
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
];

public function departaments()
    {
        return $this->hasMany(Departament::class);
    }

public function incidences()
    {
        return $this->hasMany(Incidence::class);
    }

public function horaries()
    {
        return $this->hasMany(Horary::class);
    }

public function attendance()
    {
        return $this->hasMany(Attendance_registration::class);
    }

}
