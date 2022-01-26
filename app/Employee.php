<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email',
    ];

    public function leaves()
    {
        return $this->hasMany(Leave::class,'employee_id','id');
    }
}
