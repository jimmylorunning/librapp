@extends("app")
@section('title')
  Edit Role
@stop
@section("content")
  {!! Form::model($role, ['method' => 'PATCH', 'action' => ['RolesController@update', $role->id]]) !!}
    @include('roles._form', ['submitButtonText' => 'Update Role'])
  {!! Form::close() !!}
@stop
