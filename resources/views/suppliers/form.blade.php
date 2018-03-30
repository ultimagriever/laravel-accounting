<div class="form-group">
  {!! Form::label('full_name', 'Razão Social') !!}
  {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('fantasy_name', 'Nome Fantasia') !!}
  {!! Form::text('fantasy_name', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
