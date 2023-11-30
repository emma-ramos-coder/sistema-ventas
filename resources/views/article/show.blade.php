@extends('layouts.app')

@section('template_title')
    {{ $article->name ?? "{{ __('Show') __('Article')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} {{__('Article')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $article->description }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de venta:</strong>
                            {{ $article->sale_price }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de costo:</strong>
                            {{ $article->cost_price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $article->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de articulo:</strong>
                            {{ $article->itemType->item_type_description }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $article->supplier->tradename }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de ingreso:</strong>
                            {{ $article->admission_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
