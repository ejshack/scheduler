<?php

namespace Scheduler;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
        'employee',
        'manager',
        'date',
        'start_time',
        'end_time'
    ];
}
