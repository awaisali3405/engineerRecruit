@extends('layouts.app')

@section('content')
    <div class="comments-from mt-20 mb-50">
        <div class="container">

            <div class="row justify-content-center mb-30">
                <div class="col-lg-8 col-md-10">

                    <div class="caption text-center">
                        <span class="fz-14 mb-10 text-u ls4 text-main-color">Welcome Back!</span>
                        <h1 class="fz-30 fw-600 text-main-color mb-20">Login to your account</h1>


                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 ">
                    <!-- <div class="box-shadow"> -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <div class="controls row">

                            <div class="col-12">
                                <div class="mb-10">
                                    <h6 class="fw-400 form-title">Email</h6>

                                </div>
                                <div class="form-group mb-30">
                                    <input id="form_email" type="email" class=" @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-10">
                                    <h6 class="fw-400 form-title">Password</h6>

                                </div>
                                <div class="form-group mb-10">
                                    <input id="form_email" type="password" class="@error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 text-center mt-40">
                                <button type="submit"
                                    class="butn butn-md btn-full-width form-button-color text-light radius-10">
                                    <span class="text" data-splitting>Login</span>
                                </button>
                                <p class="mt-20">Don't have an account? <a href="{{ route('register') }}"
                                        class="custom-link-singup">Sign up</a></p>

                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

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

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
