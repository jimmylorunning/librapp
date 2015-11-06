@extends("app")
@section('title')
  Add Role
@stop
@section("content")
  {!! Form::model($role = new \App\Role, ['url' => 'roles']) !!}
    @include('roles._form', ['submitButtonText' => 'Create Role', 'users' => [], 'resources' => []])
  {!! Form::close() !!}
@stop
