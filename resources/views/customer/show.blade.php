@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? "{{ __('Show') __('Customer')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} {{__('Customer')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Número de Documento:</strong>
                            {{ $customer->document_number }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Documento:</strong>
                            {{ $customer->documentType->description }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $customer->names }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $customer->surnames }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $customer->address }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $customer->city->city_name }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $customer->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
