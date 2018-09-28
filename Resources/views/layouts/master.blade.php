@extends('layouts.admin')
@section('head')
    <title>Timetrack {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ mix('css/timetrack.css') }}">
@endsection
@section('layout')
<div id="timetrack" class="timetrack">
    @yield('content')
</div>
@endsection
@section('scripts')
<script src="{{ mix('js/timetrack.js') }}"></script>
@endsection
