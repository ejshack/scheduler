@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Shift</div>

                    <div class="panel-body">
                        <div class="add-shift">
                            {!! Form::open() !!}
                                {!! Form::label('employee', 'Employee:') !!}
                                {!! Form::text('employee', null, ['id' => 'employee']) !!}
                                <br>
                                {!! Form::label('date', 'Date:') !!}
                                {!! Form::text('date', null, ['id' => 'date']) !!}
                                <br>
                                {!! Form::label('start_time', 'Start Time:') !!}
                                {!! Form::text('start_time', null, ['id' => 'start_time', 'class' => 'time ui-timepicker-input']) !!}
                            <br>
                            {!! Form::label('end_time', 'End Time:') !!}
                            {!! Form::text('end_time', null, ['id' => 'end_time', 'class' => 'time ui-timepicker-input']) !!}
                            <br>
                            {!! Form::submit('Add Shift!', ['class' => 'btn btn-primary form-control']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
