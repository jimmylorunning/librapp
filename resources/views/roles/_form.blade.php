  {!! Form::field(['name' => 'name','label' => 'Name:']) !!}
  @include('users._assign') 
  @include('resources._assign')
  {!! Form::field(['type' => 'submit', 'name' => $submitButtonText, 'class' => 'btn btn-primary']) !!}
