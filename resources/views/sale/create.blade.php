@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} {{__('Sale')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <form method="POST" action="{{ route('sales.store') }}"  role="form" enctype="multipart/form-data">
                        <div class="card-header">
                            <span class="card-title">{{ __('Create') }} {{__('Sale')}}</span>
                        </div>
                        <div class="card-body">

                                @csrf

                                @include('sale.form')


                        </div>
                        <div class="card-footer">
                            <button type="submit" id="guardar" class="btn btn-primary">Registrar</button>
                            <a href="{{ route('sales.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
