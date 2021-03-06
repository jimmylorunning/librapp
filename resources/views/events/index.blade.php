@extends('app')

@section('title')
Events
@stop

@section('content')
  <ul>
  @foreach ($events as $event)
    <li>
      {!! link_to_action('EventsController@show', $event->name, $event->id) !!}
    </li>
  @endforeach
  </ul>
  @if (Auth::user()->hasAccessToPath('events/create', 'get'))
    {!! link_to_action('EventsController@create', 'Add', [], ['class' => 'btn btn-default'] ) !!}
  @endif
@stop