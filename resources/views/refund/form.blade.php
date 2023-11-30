<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('sale_id') }}
            {{ Form::text('sale_id', $refund->sale_id, ['class' => 'form-control' . ($errors->has('sale_id') ? ' is-invalid' : ''), 'placeholder' => 'Sale Id']) }}
            {!! $errors->first('sale_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_id') }}
            {{ Form::text('customer_id', $refund->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Customer Id']) }}
            {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $refund->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('invoice_date') }}
            {{ Form::text('invoice_date', $refund->invoice_date, ['class' => 'form-control' . ($errors->has('invoice_date') ? ' is-invalid' : ''), 'placeholder' => 'Invoice Date']) }}
            {!! $errors->first('invoice_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('way_to_pay_id') }}
            {{ Form::text('way_to_pay_id', $refund->way_to_pay_id, ['class' => 'form-control' . ($errors->has('way_to_pay_id') ? ' is-invalid' : ''), 'placeholder' => 'Way To Pay Id']) }}
            {!! $errors->first('way_to_pay_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_refund') }}
            {{ Form::text('total_refund', $refund->total_refund, ['class' => 'form-control' . ($errors->has('total_refund') ? ' is-invalid' : ''), 'placeholder' => 'Total Refund']) }}
            {!! $errors->first('total_refund', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('igv') }}
            {{ Form::text('igv', $refund->igv, ['class' => 'form-control' . ($errors->has('igv') ? ' is-invalid' : ''), 'placeholder' => 'Igv']) }}
            {!! $errors->first('igv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motive') }}
            {{ Form::text('motive', $refund->motive, ['class' => 'form-control' . ($errors->has('motive') ? ' is-invalid' : ''), 'placeholder' => 'Motive']) }}
            {!! $errors->first('motive', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>