<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class incidence extends Model
{
    protected $table = 'incidences';

    protected $fillable = [
        'employee_id',
        'departament_id',
        'charge_id',
        'creation_date',
        'type',
        'reasson',
        'penalty',
        'mediation',
        'generated_by',
        'status',
        'boss_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }

        public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

    public function attendance_registrations()
    {
        return $this->hasMany(Attendance_registration::class);
    }

}
