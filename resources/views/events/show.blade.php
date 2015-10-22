@extends('app')

@section('title')
  {!! $event->name !!}
@stop

@section('content')
  <p>{!! $event->description !!}</p>
  {!! link_to_action('EventsController@edit', 'Edit', $event->id, ['class' => 'btn btn-default']) !!}
@stop