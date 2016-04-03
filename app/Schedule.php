<?php

namespace Scheduler;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'employee',
        'manager',
        'date',
        'start_time',
        'end_time'
    ];
}
