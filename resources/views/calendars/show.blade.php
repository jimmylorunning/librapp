@extends('app')

@section('title')
  <h1>{{ $calendar->name }}</h1>
@endsection

@section('content')
<ul>
  <li>{{ \Carbon\Carbon::createFromTimestamp(strtotime($calendar->starts))->toFormattedDateString() }} &#8212;
   {{ \Carbon\Carbon::createFromTimestamp(strtotime($calendar->ends))->toFormattedDateString() }}</li>
  <li><strong>Audience</strong>: {{ $calendar->audience }}</li>
</ul>
{!! link_to_action('CalendarsController@edit', 'Edit', [$calendar->id], ['class' => 'btn btn-default']) !!}
@endsection