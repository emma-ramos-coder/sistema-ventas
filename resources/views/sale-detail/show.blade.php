@extends('layouts.app')

@section('template_title')
    {{ $saleDetail->name ?? "{{ __('Show') Sale Detail" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sale-details.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sale Id:</strong>
                            {{ $saleDetail->sale_id }}
                        </div>
                        <div class="form-group">
                            <strong>Article Id:</strong>
                            {{ $saleDetail->article_id }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $saleDetail->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $saleDetail->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
