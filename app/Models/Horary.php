<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horary extends Model
{
    protected $table = 'horaries';

    protected $fillable = [
        'employees_id',
        'expected_input',
        'expected_exit',
        'overtime',
        'departaments_id',
        'bosses_id'
    ];

    public function departament ()
    {
        return $this->hasMany(Departament::class);
    }

    public function employees ()
    {
        return $this->belongsTo(Employee::class);
    }

        public function bosses()
    {
        return $this->belongsTo(Boss::class);
    }

}
