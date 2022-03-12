@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
  <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $event->title; }}</h2>
  <div>
    <p>{{ $event->start_time; }}</p>
    <p>{{ $event->end_time; }}</p>
  </div>
@stop