@extends('app')
@section('title')
  {{ $role->name }}
@stop
@section('content')
  @if ($role->users->toArray())
    <h2>Users:</h2>
    <ul>
    @foreach ($role->users as $user)
      <li>{{ $user->name }}</li>
    @endforeach
    </ul>
  @endif

  @if ($role->resources->toArray())
    <h2>Resources:</h2>
    <ul>
    @foreach ($role->resources as $resource)
      <li>{{ $resource->pattern . ' (' . $resource->verb . ')' }}</li>
    @endforeach
    </ul>
  @endif

  {!! link_to_action('RolesController@edit', 'Edit', $role->id, ['class' => 'btn btn-default']) !!}
@stop