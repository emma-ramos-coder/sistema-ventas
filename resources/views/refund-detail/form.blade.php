<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('refund_id') }}
            {{ Form::text('refund_id', $refundDetail->refund_id, ['class' => 'form-control' . ($errors->has('refund_id') ? ' is-invalid' : ''), 'placeholder' => 'Refund Id']) }}
            {!! $errors->first('refund_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('article_id') }}
            {{ Form::text('article_id', $refundDetail->article_id, ['class' => 'form-control' . ($errors->has('article_id') ? ' is-invalid' : ''), 'placeholder' => 'Article Id']) }}
            {!! $errors->first('article_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $refundDetail->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $refundDetail->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>