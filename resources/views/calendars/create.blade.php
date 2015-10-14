@extends('app')

@section('title')
{{ $title }}
@stop

@section('content')
  {!! Form::model($calendar = new \App\Calendar, ['url' => 'calendars']) !!}
    @include('calendars._form', ['submitButtonText' => 'Create Calendar'])
  {!! Form::close() !!}
@stop