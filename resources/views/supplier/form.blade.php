<div class="box box-info padding-1">
    <div class="box-body">
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Número de documento') }}
            {{ Form::text('document_number', $supplier->document_number, ['class' => 'form-control' . ($errors->has('document_number') ? ' is-invalid' : ''), 'placeholder' => 'Numero de documento']) }}
            {!! $errors->first('document_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Tipo de documento') }}
            {{ Form::select('document_type_id', $document_types, $supplier->document_type_id, ['class' => 'form-control' . ($errors->has('document_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de documento']) }}
            {!! $errors->first('document_type_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('name', $supplier->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('surname', $supplier->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Nombre comercial') }}
            {{ Form::text('tradename', $supplier->tradename, ['class' => 'form-control' . ($errors->has('tradename') ? ' is-invalid' : ''), 'placeholder' => 'Nombre comercial']) }}
            {!! $errors->first('tradename', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $supplier->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::select('city_id', $cities, $supplier->city_id, ['class' => 'form-control' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('phone', $supplier->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
