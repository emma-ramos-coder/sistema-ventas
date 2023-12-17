@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} {{__('Rol')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} {{__('Rol')}}</span>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route'=>'roles.store']) !!}
                            @include('roles.form')
                            {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary my-4']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
