<div class="box box-info padding-1">
    <div class="box-body">
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Número de documento') }}
            {{ Form::text('document_number', $customer->document_number, ['class' => 'form-control' . ($errors->has('document_number') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Documento']) }}
            {!! $errors->first('document_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Tipo de documento') }}
            {{ Form::select('document_type_id', $document_types , $customer->document_type_id, ['class' => 'form-control' . ($errors->has('document_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Documento']) }}
            {!! $errors->first('document_type_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('names', $customer->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('surnames', $customer->surnames, ['class' => 'form-control' . ($errors->has('surnames') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('surnames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $customer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::select('city_id', $cities, $customer->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('phone', $customer->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
