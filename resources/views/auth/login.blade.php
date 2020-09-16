@extends('layouts.email')

@section('titulo','Iniciar sesión')

@section('contenido')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="/">Blog personal</a>
                </div>
            </nav>
        </div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Iniciar sesión</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class=" form-label-group">
                                    <input id="inputemail" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="inputemail">{{ __('E-Mail Address') }}</label>
                                </div>

                                <div class="form-label-group">
                                    <input id="inputpassword" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <label for="inputpassword">{{ __('Password') }}</label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>

                                <button type="submit"
                                    class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection