@extends('app')

@section('title')
New Event
@stop

@section('content')
  {!! Form::model($event = new \App\Event, ['url' => 'events']) !!}
    @include('events._form', ['submitButtonText' => 'Create Event'])
  {!! Form::close() !!}
@stop

