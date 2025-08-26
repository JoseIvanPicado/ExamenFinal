<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class charge extends Model
{
    protected $table = 'charges';

    protected $fillable = [
        'name_chargues',
        'type_charges',
        'academic_level',
        'experience_work',
        'requeriments',
    ];

    public function departament()
    {
        return $this->hasMany(Departament::class);
    }

    public function attendance_registrations()
    {
        return $this->hasMany(Attendance_registration::class);
    }
}
