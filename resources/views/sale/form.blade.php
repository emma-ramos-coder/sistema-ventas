<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::select('customer_id', $customers, $sale->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vendedor') }}
            {{ Form::select('user_id', $users, $sale->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Vendedor']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de factura') }}
            {{ Form::text('invoice_date', $sale->invoice_date, ['class' => 'form-control' . ($errors->has('invoice_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de factura']) }}
            {!! $errors->first('invoice_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Forma de pago') }}
            {{ Form::select('way_to_pay_id', $way_to_pays, $sale->way_to_pay_id, ['class' => 'form-control' . ($errors->has('way_to_pay_id') ? ' is-invalid' : ''), 'placeholder' => 'Forma de pago']) }}
            {!! $errors->first('way_to_pay_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total factura') }}
            {{ Form::text('total_invoice', $sale->total_invoice, ['class' => 'form-control' . ($errors->has('total_invoice') ? ' is-invalid' : ''), 'placeholder' => 'Total Factura']) }}
            {!! $errors->first('total_invoice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IGV') }}
            {{ Form::text('igv', $sale->igv, ['class' => 'form-control' . ($errors->has('igv') ? ' is-invalid' : ''), 'placeholder' => 'IGV']) }}
            {!! $errors->first('igv', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
