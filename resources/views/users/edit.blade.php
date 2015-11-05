@extends("app")
@section('title')
  Edit User 
@stop
@section("content")
  {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
    @include('users._form', ['submitButtonText' => 'Update User'])
  {!! Form::close() !!}
@stop
