<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Descripción de tipo de artículo') }}
            {{ Form::text('item_type_description', $itemType->item_type_description, ['class' => 'form-control' . ($errors->has('item_type_description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción de tipo de artículo']) }}
            {!! $errors->first('item_type_description', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20 mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
