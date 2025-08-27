<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $table = 'charges';

    protected $fillable = [
        'name_chargues',
        'type_charges',
        'academic_level',
        'experience_work',
        'requeriments',
    ];

    public function departaments()
    {
        return $this->hasMany(Departament::class);
    }

    public function attendance_registrations()
    {
        return $this->hasMany(Attendance_registration::class);
    }
}
