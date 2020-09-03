@extends('layouts.login')

@section('login-content')






<div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <p class="text-muted">Sign In to your account</p>
        <div class="input-group mb-3">
            <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                        <use xlink:href={{asset('assets/icons/sprites/free.svg#cil-user')}}>
                        </use>
                    </svg></span></div>
            <input id="username" type="text"
                class="form-control @error('username') is-invalid @enderror" name="username"
                value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="input-group mb-4">
            <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                        <use
                            xlink:href={{asset('assets/icons/sprites/free.svg#cil-lock-locked')}}>
                        </use>
                    </svg></span></div>
            <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"
                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>

















</form>

<p>click <a href="/getlogindetails">here</a>to get your login details!!</p>
@endsection
