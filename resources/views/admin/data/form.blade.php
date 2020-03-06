<div class="form-group {{ $errors->has('type_id') ? 'has-error' : ''}}">
    {!! Form::label('type_id', 'Type Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('type_id', $grainsType, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('user_id', $customer, null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
    {!! Form::label('qty', 'Qty', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('qty', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('credited') ? 'has-error' : ''}}">
    {!! Form::label('credited', 'Credited', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('credited', json_decode('{"true":"Yes","False":"No"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('credited', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('polished') ? 'has-error' : ''}}">
    {!! Form::label('polished', 'Polished', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('polished', json_decode('{"true":"Yes","False":"No"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('polished', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
