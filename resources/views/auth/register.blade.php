@extends('layouts.app')

@section('content')
    <div class="comments-from mt-20 mb-50">
        <div class="container">

            <div class="row justify-content-center mb-30">
                <div class="col-lg-8 col-md-10">

                    <div class="caption text-center">
                        <span class="fz-14 mb-10 text-u ls4 text-main-color">Let get started!</span>
                        <h1 class="fz-30 fw-600 text-main-color mb-20">Create an account</h1>


                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 ">
                    <!-- <div class="box-shadow"> -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <div class="controls row">

                            <div class="col-12">
                                <div class="mb-10">
                                    <h6 class="fw-400 form-title">Full Name</h6>

                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="name" type="text" class=" @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-10">
                                    <h6 class="fw-400 form-title">Email</h6>

                                </div>
                                <div class="form-group mb-30">
                                    <input id="form_email" type="email" class=" @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="form_email" type="password" class=" @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-10">
                                    <h6 class="fw-400 form-title">Confirm Password</h6>

                                </div>
                                <div class="form-group mb-10">
                                    <input id="form_email" type="password" class="" name="password_confirmation"
                                        required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="col-12 text-center mt-30">
                                <button type="submit"
                                    class="butn butn-md btn-full-width form-button-color text-light radius-10">
                                    <span class="text" data-splitting>Sign Up</span>
                                </button>
                                <p class="mt-20">Already have an account? <a href="{{ route('login') }}"
                                        class="custom-link-singup">Login</a></p>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
