  <div class="form-group">
    {!! Form::label('name', 'Name:' ) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('calendar', 'Calendar:') !!}
    @foreach ($calendars as $id => $calendar)
      {!! Form::checkbox($calendar, $id) !!}
      {!! $calendar !!}
    @endforeach
  </div>
  <div class="form-group">
    {!! Form::label('starts', 'Start date:' ) !!}
    {!! Form::input('date', 'starts', $event->starts->format('Y-m-d'), ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ends', 'End date:' ) !!}
    {!! Form::input('date', 'ends', $event->ends->format('Y-m-d'), ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('description', 'Description:' ) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}  
  </div>