<div class="box box-info padding-1">
    <div class="box-body">
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Cliente') }}
            {{ Form::select('customer_id', $customers, $sale->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Fecha de factura') }}
            {{ Form::date('invoice_date', $sale->invoice_date, ['class' => 'form-control' . ($errors->has('invoice_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de factura']) }}
            {!! $errors->first('invoice_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Forma de pago') }}
            {{ Form::select('way_to_pay_id', $way_to_pays, $sale->way_to_pay_id, ['class' => 'form-control' . ($errors->has('way_to_pay_id') ? ' is-invalid' : ''), 'placeholder' => 'Forma de pago']) }}
            {!! $errors->first('way_to_pay_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="mb-3 row">
        <div class="col form-group">
            {{ Form::label('Producto') }}
            {{ Form::select('article', $articles, '', ['class' => 'form-control' . ($errors->has('article') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('article', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Stock') }}
            {{ Form::number('stock', '', ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock', 'disabled' => 'disabled']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::number('quantity', $sale->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col form-group">
            {{ Form::label('Precio de venta') }}
            {{ Form::number('sale_price', '', ['class' => 'form-control' . ($errors->has('sale_price') ? ' is-invalid' : ''), 'placeholder' => 'Precio de venta', 'step' => '0.01', 'disabled' => 'disabled']) }}
            {!! $errors->first('sale_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        {{-- <div class="form-group">
            {{ Form::label('Total factura') }}
            {{ Form::number('total_invoice', number_format($sale->total_invoice, 2, '.', ''), ['class' => 'form-control' . ($errors->has('total_invoice') ? ' is-invalid' : ''), 'placeholder' => 'Total Factura', 'step' => '0.01']) }}
            {!! $errors->first('total_invoice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IGV') }}
            {{ Form::number('igv', number_format($sale->igv, 2, '.', ''), ['class' => 'form-control' . ($errors->has('igv') ? ' is-invalid' : ''), 'placeholder' => 'IGV', 'step' => '0.01']) }}
            {!! $errors->first('igv', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

    </div>
    <div class="box-footer mt-4">
        <button type="submit" class="btn btn-primary">Registrar detalle</button>
    </div>
</div>
<script>

</script>
