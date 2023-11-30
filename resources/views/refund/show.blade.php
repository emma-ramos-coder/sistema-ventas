@extends('layouts.app')

@section('template_title')
    {{ $refund->name ?? "{{ __('Show') Refund" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Refund</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('refunds.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sale Id:</strong>
                            {{ $refund->sale_id }}
                        </div>
                        <div class="form-group">
                            <strong>Customer Id:</strong>
                            {{ $refund->customer_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $refund->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Invoice Date:</strong>
                            {{ $refund->invoice_date }}
                        </div>
                        <div class="form-group">
                            <strong>Way To Pay Id:</strong>
                            {{ $refund->way_to_pay_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total Refund:</strong>
                            {{ $refund->total_refund }}
                        </div>
                        <div class="form-group">
                            <strong>Igv:</strong>
                            {{ $refund->igv }}
                        </div>
                        <div class="form-group">
                            <strong>Motive:</strong>
                            {{ $refund->motive }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
