@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:10%">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header" style="text-align: center;"><b>Login</b></div>

                <div class="card-body">
                    <form method="POST" action="{{route('login') }}">
                        @csrf

                        <div class="row mb-1">
                            <label for="email" class="col-form-label text-md-start">{{ __('Email Address') }}</label>
                        </div>
                        <div class="row mb-3" style="width: auto">
                            <div class="col-md-6 text-md-start" style="display: flex; width: 100%">
                                <input id="email" style="" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <label for="password" class="col-form-label text-md-start">{{ __('Password') }}</label>
                        </div>
                        <div>
                            <div class="col-md-6" style="display: flex; width: 100%">
                                <input id="password" style="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="" style="text-align: center;">
                                <button type="submit" style="padding-left: 30px; padding-right:30px" class="btn btn-outline-secondary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0 mt-3">
                            <div class="">
                                Dont have an account? <a href="{{url('/register')}}">Register Now</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
