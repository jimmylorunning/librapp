@extends('app')

@section('title')
  <h1>{{ $calendar->name }}</h1>
@endsection

@section('content')
<ul>
  <li>{{ $calendar->starts->toFormattedDateString() }} &#8212;
   {{ $calendar->ends->toFormattedDateString() }}</li>
  <li><strong>Audience</strong>: {{ $calendar->audience->name }}</li>
</ul>
{!! link_to_action('CalendarsController@edit', 'Edit', [$calendar->id], ['class' => 'btn btn-default']) !!}
@endsection