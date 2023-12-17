@extends('layouts.app')

@section('template_title')
    {{ __('Edit') }} {{__('Rol')}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Edit') }} {{__('Rol')}}</span>
                    </div>
                    <div class="card-body">
                        {!! Form::model($role,['route'=>['roles.update',$role],'method'=>'put']) !!}
                            @include('roles.form')
                            {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary my-4']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
