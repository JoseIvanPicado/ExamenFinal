<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance_registration extends Model
{
    protected $table = 'attendance_registrations';

    protected $fillable = [
        'creation_date',
        'time_in',
        'time_exit',
        'hours_worked',
        'overtime',
        'employee_id',
        'charge_id',
        'incidence_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }

    public function incidence()
    {
        return $this->belongsTo(Incidence::class);
    }

    public function absence()
    {
        return $this->hasMany(Absence::class);
    }
}
