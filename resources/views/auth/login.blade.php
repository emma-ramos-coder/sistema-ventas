@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-4">
        <div class="col-4 mx-auto">
            <img src="img/logo.png" alt="logo" width="100%">
        </div>
    </div>
    <div class="row justify-content-center p-4 align-items-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row m-2">
                            <div class="col-2 p-0 border text-center rounded-2">
                                <i class="fa fa-envelope fa-lg"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row m-2">
                            <div class="col-2 p-0 border text-center rounded-2">
                                <i class="fa fa-lock fa-lg"></i>
                            </div>
                            <div class="col-10 p-0">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-9 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input border-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               {{--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
