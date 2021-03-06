@extends('app')
@section('title')
  Roles
@stop
@section('content')
  @if (count($roles))
    <ul class="index">
    @foreach ($roles as $role)
      <li>{!! link_to_action('RolesController@show', $role->name, [$role->id]) !!} /
        {!! link_to_action('RolesController@edit', 'edit', [$role->id], ['class' => 'btn btn-xs btn-default']) !!} /
        {!! Form::model($role, ['method' => 'DELETE', 'action' => ['RolesController@destroy', $role->id]]) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-xs btn-default']) !!}
        {!! Form::close() !!}
      </li>
    @endforeach
    </ul>
  @else
    <p>There are no roles</p>
  @endif
  @if (Auth::user()->hasAccessToPath('roles/create', 'get'))
    {!! link_to_action('RolesController@create', 'Add Role', [], ['class' => 'btn btn-default'] ) !!}
  @endif
@stop