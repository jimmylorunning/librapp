@extends('app')
@section('title')
  Roles
@stop
@section('content')
  @if (count($roles))
    <ul>
    @foreach ($roles as $role)
      <li>{!! link_to_action('RolesController@show', $role->name, [$role->id]) !!}</li>
    @endforeach
    </ul>
  @else
    <p>There are no roles</p>
  @endif
  {!! link_to_action('RolesController@create', 'Add Role', 'btn btn-default') !!}
@stop