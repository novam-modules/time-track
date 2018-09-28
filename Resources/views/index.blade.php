@extends('timetrack::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <div id="time-sheet" class="table-responsive">
        <time-sheet :assigment-source="'/admin/projects/tasks'"></time-sheet>
    </div>
@stop
