@extends('timetrack::layouts.master')

@section('content')
    <h1>Time Track</h1>

    <div id="time-sheet" class="table-responsive">
        <time-sheet :source="'/admin/projects/tasks'"></time-sheet>
    </div>
@stop
