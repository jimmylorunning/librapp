@extends('app')

@section('title')
  <h1>Calendars</h1>
@endsection

@section('content')
  <ul>
    @foreach ($calendars as $calendar)
      <li>{!! link_to_action('CalendarsController@show', $calendar['name'], [$calendar['id']]) !!}</li>
    @endforeach
  </ul>
@endsection