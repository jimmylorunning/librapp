@extends('app')

@section('title')
{{ $title }}
@stop

@section('content')
  {!! Form::model($calendar, ['method' => 'PATCH', 'action' => ['CalendarsController@update', $calendar->id]]) !!}
    @include('calendars._form', ['submitButtonText' => 'Update Calendar'])
  {!! Form::close() !!}
@stop