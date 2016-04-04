@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Shift</div>

                    <div class="panel-body">
                        @foreach($shifts as $shift)
                            <h3>{{$shift['employee']}}</h3>
                            <h5>{{$shift['date']}}</h5>
                            <p>{{$shift['start_time']}}</p>
                            <p>{{$shift['end_time']}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
