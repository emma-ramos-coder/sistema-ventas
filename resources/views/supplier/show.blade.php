@extends('layouts.app')

@section('template_title')
    {{ $supplier->name ?? "{{ __('Show') __('Supplier')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} {{__('Supplier')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Numero de documento:</strong>
                            {{ $supplier->document_number }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de documento:</strong>
                            {{ $supplier->documentType->description }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $supplier->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $supplier->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre comercial:</strong>
                            {{ $supplier->tradename }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $supplier->address }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $supplier->city->city_name }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $supplier->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
