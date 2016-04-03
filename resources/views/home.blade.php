@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="add-shift">
                            <h3>Add Shift</h3>
                            <p>Employee: <input type="text" id="employee"></p>
                            <p>Date: <input type="text" id="date"></p>
                            <p>Start time: <input type="text" id="start_time" class="time ui-timepicker-input"></p>
                            <p>End time: <input type="text" id="end_time" class="time ui-timepicker-input"></p>
                            <button type="submit">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
