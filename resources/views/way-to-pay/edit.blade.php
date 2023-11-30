@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} {{__('Way To Pay')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} {{__('Way To Pay')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('way-to-pays.update', $wayToPay->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('way-to-pay.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
