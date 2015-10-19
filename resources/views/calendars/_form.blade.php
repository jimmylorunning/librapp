  <div class="form-group">
    {!! Form::label('name', 'Name:' ) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('starts', 'Start date:' ) !!}
    {!! Form::input('date', 'starts', $calendar->starts->format('Y-m-d'), ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('ends', 'End date:' ) !!}
    {!! Form::input('date', 'ends', $calendar->ends->format('Y-m-d'), ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('audience_id', 'Audience:' ) !!}
    {!! Form::select('audience_id', $audiences, null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}  
  </div>