<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name P Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name_p', 'Last Name P:') !!}
    {!! Form::text('last_name_p', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name M Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name_m', 'Last Name M:') !!}
    {!! Form::text('last_name_m', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::text('user', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('alumnos.index') !!}" class="btn btn-default">Cancel</a>
</div>
