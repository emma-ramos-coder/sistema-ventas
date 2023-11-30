@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} {{__('Article')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} {{__('Article')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('article.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
