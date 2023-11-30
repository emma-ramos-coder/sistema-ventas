<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Descripción de la forma de pago') }}
            {{ Form::text('way_to_pay_description', $wayToPay->way_to_pay_description, ['class' => 'form-control' . ($errors->has('way_to_pay_description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción de la forma de pago']) }}
            {!! $errors->first('way_to_pay_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
