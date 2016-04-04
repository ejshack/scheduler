@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="add-shift-link">
                            <h2>
                                <a href="{{ action('ShiftsController@create') }}">Create New Shift</a>
                            </h2>
                        </div>
                        <div class="display-shift-link">
                            <h2>
                                <a href="{{ action('ShiftsController@show') }}">Show Shifts</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
