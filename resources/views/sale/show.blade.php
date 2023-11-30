@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') __('Sale')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $sale->customer->document_number }}
                        </div>
                        <div class="form-group">
                            <strong>Vendedor:</strong>
                            {{ $sale->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha factura:</strong>
                            {{ $sale->invoice_date }}
                        </div>
                        <div class="form-group">
                            <strong>Forma de pago:</strong>
                            {{ $sale->wayToPay->way_to_pay_description }}
                        </div>
                        <div class="form-group">
                            <strong>Total factura:</strong>
                            {{ $sale->total_invoice }}
                        </div>
                        <div class="form-group">
                            <strong>IGV:</strong>
                            {{ $sale->igv }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
