<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table = 'departaments';

    protected $fillable = [
        'employee_id',
        'name_departament',
        'location',
        'description',
        'state',
        'capacity_staff',
        'boss_id',
        'charge_id',
    ];

   public function employee()
{
    return $this->belongsTo(Employee::class);
}

public function boss()
{
    return $this->belongsTo(Employee::class);
}

public function charge()
{
    return $this->belongsTo(Charge::class);
}

   // public function horary()
    //{
       // return $this->belongsTo(Horary::class);
    //}

}
