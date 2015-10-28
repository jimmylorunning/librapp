  {!! Form::field(['label' => 'Name:', 'name' => 'name']) !!}
  @foreach ($calendars as $id => $calendar)
    {!! Form::field(['type' => 'checkbox', 'name' => "calendars[]", 'label' => $calendar, 'id' => $id, 'value' => in_array($id, $checked)]) !!}
  @endforeach
  {!! Form::field(['type' => 'date', 'label' => 'Start date:', 'name' => 'starts', 'value' => $event->starts->format('Y-m-d')]) !!}
  {!! Form::field(['type' => 'date', 'label' => 'End date:', 'name' => 'ends', 'value' => $event->ends->format('Y-m-d')]) !!}
  {!! Form::field(['type' => 'textarea', 'label' => 'Description:', 'name' => 'description']) !!}
  {!! Form::field(['type' => 'submit', 'name' => $submitButtonText, 'class' => 'btn btn-primary']) !!}
