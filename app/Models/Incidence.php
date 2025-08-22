<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class incidence extends Model
{
    protected $table = 'incidences';

    protected $fillable = [
        'employees_id',
        'departaments_id',
        'charges_id',
        'creation_date',
        'type',
        'reasson',
        'penalty',
        'mediation',
        'generated_by',
        'status',
        'bosses_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }

    public function attendance_registrations()
    {
        return $this->belongsTo(Attendance_registration::class);
    }
}
