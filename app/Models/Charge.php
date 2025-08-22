<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class charge extends Model
{
    protected $table = 'charges';

    protected $fillable = [
        'name_charge',
        'type_charge',
        'academic_level',
        'experience_works',
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
