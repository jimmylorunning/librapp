@extends('app')

@section('title')
{{ $title }}
@stop

@section('content')
  {!! Form::model($calendar = new \App\Calendar, ['url' => 'calendars']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Name:' ) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('starts', 'Start date:' ) !!}
    {!! Form::input('date', 'starts', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ends', 'End date:' ) !!}
    {!! Form::input('date', 'ends', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('audience', 'Audience:' ) !!}
    {!! Form::select('audience', ['adult' => 'adult', 'children' => 'children'], null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Add Calendar', ['class' => 'btn btn-primary']) !!}  
  </div>
  {!! Form::close() !!}
@stop