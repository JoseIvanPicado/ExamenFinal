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
        'civil_status',
        'number_phone',
        'emergency_contact_phone',
        'emergency_contact_name',
        'mail',
        'nacionality',
        'educative_level',
        'identification',
        'address',
        'hire_date',
        'position',
        'departament',
];

public function departament()
    {
        return $this->hasMany(Departament::class);
    }

public function incidence()
    {
        return $this->hasMany(Incidence::class);
    }

public function horaries()
    {
        return $this->hasMany(Horary::class);
    }

}
