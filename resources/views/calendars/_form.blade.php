  {!! Form::field(['label' => 'Name:', 'name' => 'name']) !!}
  {!! Form::field(['type' => 'date', 'label' => 'Start date:', 'name' => 'starts', 'value' => $calendar->starts->format('Y-m-d')]) !!}
  {!! Form::field(['type' => 'date', 'label' => 'End date:', 'name' => 'ends', 'value' => $calendar->ends->format('Y-m-d')]) !!}
  {!! Form::field(['type' => 'select', 'label' => 'Audience:', 'choices' => $audiences, 'name' => 'audience_id']) !!}
  {!! Form::field(['type' => 'submit', 'name' => $submitButtonText, 'class' => 'btn btn-primary']) !!}
