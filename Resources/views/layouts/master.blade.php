@extends('layouts.admin')
@section('head')
    <title>TimeTracker {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/timetracker.css') }}">
@endsection
@section('layout')
<div id="timetracker" class="timetracker">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/timetracker.js') }}"></script>
@endsection
