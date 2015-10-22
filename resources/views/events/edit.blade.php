@extends('app')

@section('title')
Edit Event
@stop

@section('content')
  {!! Form::model($event, ['method' => 'PATCH', 'action' => ['EventsController@update', $event->id]]) !!}
    @include('events._form', ['submitButtonText' => 'Update Event'])
  {!! Form::close() !!}
@stop

