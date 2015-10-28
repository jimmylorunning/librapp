@extends('app')
@section('title')
  {{ $role->name }}
@stop
@section('content')
  {!! link_to_action('RolesController@edit', 'Edit', $role->id, ['class' => 'btn btn-default']) !!}
@stop