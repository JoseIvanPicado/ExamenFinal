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
        'employees_id',
        'charges_id',
        'incidences_id'
    ];

    public function absences()
    {
        return $this->belongsTo(Absence::class);
    }

    public function charges()
    {
        return $this->belongsTo(Charge::class);
    }

    public function incidences()
    {
        return $this->belongsTo(Incidence::class);
    }
}
