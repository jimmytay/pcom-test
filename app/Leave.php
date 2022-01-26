<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    const PENDING = 0;
    const APPROVED = 1;
    const REJECT = 2;

    protected $fillable = [
        'employee_id', 'applied_date', 'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
