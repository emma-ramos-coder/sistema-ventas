@extends('layouts.app')

@section('template_title')
    {{ $wayToPay->name ?? "{{ __('Show') __('Way To Pay')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} {{__('Way To Pay')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('way-to-pays.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripción de la forma de pago:</strong>
                            {{ $wayToPay->way_to_pay_description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
