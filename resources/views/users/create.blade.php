@extends("app")
@section('title')
  Add User 
@stop
@section("content")
  {!! Form::model($user = new \App\User, ['url' => 'users']) !!}
    @include('users._form', ['new' => true, 'submitButtonText' => 'Create User'])
  {!! Form::close() !!}
@stop
