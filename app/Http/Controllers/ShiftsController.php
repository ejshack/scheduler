<?php

namespace Scheduler\Http\Controllers;

use Request;
use Scheduler\Shift;
use Scheduler\Http\Requests;

class ShiftsController extends Controller
{

    public function show() {
        $shifts = Shift::all();
        return view('shifts.show', compact('shifts'));
    }
    
    public function create() {
        return view('shifts.create');
    }

    public function store() {
        $input = Request::all();
        $date = Request::get('date');
        $start = Request::get('start_time');
        $end = Request::get('end_time');

        $dateFormatted = strtotime($date);
        $newDate = date('Y-m-d', $dateFormatted);
        $startFormatted = strtotime($start);
        $newStart = date('h:i:s', $startFormatted);
        $endFormatted = strtotime($end);
        $newEnd = date('h:i:s', $endFormatted);

        $input['date'] = $newDate;
        $input['start_time'] = $newStart;
        $input['end_time'] = $newEnd;
        $input['manager'] = 'admin';

        Shift::create($input);

        return redirect('home');
    }
}
