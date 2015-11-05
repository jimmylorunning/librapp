  {!! Form::field(['name' => 'name','label' => 'Name:']) !!}
  {!! Form::field(['name' => 'email','label' => 'Email:']) !!}
  @if($new)
    {!! Form::field(['type' => 'password', 'name' => 'password', 'label' => 'Password:']) !!}
  @else
    <!-- something here for changing password -->
  @endif
  {!! Form::field(['type' => 'submit', 'name' => $submitButtonText, 'class' => 'btn btn-primary']) !!}
