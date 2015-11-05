@extends('app')
@section('title')
  Users 
@stop
@section('content')
  @if (count($users))
    <ul class="index">
    @foreach ($users as $user)
      <li>{!! link_to_action('UsersController@show', $user->name, [$user->id]) !!} /
        {!! link_to_action('UsersController@edit', 'edit', [$user->id], ['class' => 'btn btn-xs btn-default']) !!} /
        {!! Form::model($user, ['method' => 'DELETE', 'action' => ['UsersController@destroy', $user->id]]) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-xs btn-default']) !!}
        {!! Form::close() !!}
      </li>
    @endforeach
    </ul>
  @else
    <p>There are no users</p>
  @endif
  {!! link_to_action('UsersController@create', 'Add User', 'btn btn-default') !!}
@stop