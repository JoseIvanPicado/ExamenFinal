<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $table = 'absences';

    protected $fillable = [
        'employee_id',
        'date_in',
        'date_end',
        'type',
        'reasson',
        'status',
        'attendance_registration_id',
        'boss_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function attendance_registration()
    {
        return $this->belongsTo(Attendance_registration::class);
    }

    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

}
