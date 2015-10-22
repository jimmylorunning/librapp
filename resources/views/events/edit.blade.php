@extends('app')

@section('title')
Edit Event
@stop

@section('content')
  {!! Form::model($event, ['url' => 'events']) !!}
    @include('events._form', ['submitButtonText' => 'Update Event'])
  {!! Form::close() !!}
@stop

