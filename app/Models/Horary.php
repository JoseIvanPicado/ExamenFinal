<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horary extends Model
{
    protected $table = 'horaries';

    protected $fillable = [
        'employee_id',
        'expected_input',
        'expected_exit',
        'overtime',
        'departament_id',
        'boss_id'
    ];

  public function employee ()
    {
        return $this->belongsTo(Employee::class);
    }


    public function departament ()
    {
        return $this->belongsTo(Departament::class);
    }


        public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

}
