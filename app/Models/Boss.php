<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Boss extends Model
{
    protected $table = 'bosses';

    protected $fillable = [
        'first_name',
        'last_name',
        'identification',
        'number_phone',
        'mail',
        'nacionality',
        'years_old',
        'gender',
        'marital_states',
        'adress',
        'emergency_contact_phone',
        'emergency_contact_name',
        'hire_date',
        'start_date_position',
        'position',
        'departament_charge',
        'team_size',
        'budget_responsibility',
        'educative_level',
        'work_experience',
        'photo',
        'observations',
        'status',
    ];

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function departments()
    {
        return $this->hasMany(Departament::class);
    }

    public function horaries()
    {
        return $this->hasMany(Horary::class);
    }
}
