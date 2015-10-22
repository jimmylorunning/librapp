@extends('app')

@section('title')
  <h1>{!! $event->name !!}</h1>
@stop

@section('content')
  <p>{!! $event->description !!}</p>
  {!! link_to_action('EventsController@edit', 'Edit', $event->id, ['class' => 'btn btn-default']) !!}
@stop