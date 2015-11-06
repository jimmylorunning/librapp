<div class="users">
  <h2>Users</h2>
  @foreach ($users as $user)
      {!! Form::field(['type' => 'checkbox', 'name' => "user_id[]", 'label' => $user->name, 'id' => $user->id, 'value' => $role->users->contains($user->id)]) !!}
  @endforeach
</div>