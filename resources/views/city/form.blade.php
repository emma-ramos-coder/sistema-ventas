<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de Ciudad') }}
            {{ Form::text('city_name', $city->city_name, ['class' => 'form-control' . ($errors->has('city_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de ciudad']) }}
            {!! $errors->first('city_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
