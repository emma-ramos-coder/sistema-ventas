@extends('layouts.app')

@section('template_title')
    {{ $refundDetail->name ?? "{{ __('Show') Refund Detail" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Refund Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('refund-details.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Refund Id:</strong>
                            {{ $refundDetail->refund_id }}
                        </div>
                        <div class="form-group">
                            <strong>Article Id:</strong>
                            {{ $refundDetail->article_id }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $refundDetail->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $refundDetail->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
