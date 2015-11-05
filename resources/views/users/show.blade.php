@extends('app')
@section('title')
  {{ $user->name }}
@stop
@section('content')
  <p><strong>email:</strong> {{ $user->email }}</p>
  {!! link_to_action('UsersController@edit', 'Edit', $user->id, ['class' => 'btn btn-default']) !!}
@stop