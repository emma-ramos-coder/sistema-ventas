<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group mb-3">
            {{ Form::label('Descripción') }}
            {{ Form::text('description', $article->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row mb-3">
        <div class="col form-group">
            {{ Form::label('Precio de venta') }}
            {{ Form::number('sale_price', $article->sale_price, ['step' => '0.01', 'class' => 'form-control' . ($errors->has('sale_price') ? ' is-invalid' : ''), 'placeholder' => 'Precio de venta']) }}
            {!! $errors->first('sale_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Precio de costo') }}
            {{ Form::number('cost_price', $article->cost_price, ['step' => '0.01', 'class' => 'form-control' . ($errors->has('cost_price') ? ' is-invalid' : ''), 'placeholder' => 'Precio de costo']) }}
            {!! $errors->first('cost_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Stock') }}
            {{ Form::number('stock', $article->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="row mb-3">
        <div class="col form-group">
            {{ Form::label('Tipo de artículo') }}
            {{ Form::select('item_type_id', $item_types, $article->item_type_id, ['class' => 'form-control' . ($errors->has('item_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de artículo']) }}
            {!! $errors->first('item_type_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::select('supplier_id', $suppliers, $article->supplier_id, ['class' => 'form-control' . ($errors->has('supplier_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('supplier_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Fecha de ingreso') }}
            {{ Form::date('admission_date', $article->admission_date, ['class' => 'form-control' . ($errors->has('admission_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de ingreso']) }}
            {!! $errors->first('admission_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
