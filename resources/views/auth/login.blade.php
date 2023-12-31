@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to Fan Into Flame Int'l.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="index.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ asset('assets/images/logo-light.svg') }}" alt=""
                                            class="rounded-circle" height="34" />
                                    </span>
                                </div>
                            </a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ asset('assets/images/logo.svg') }}" alt=""
                                            class="rounded-circle" height="34" />
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control" value="{{ old('email') }}" id="email"
                                        name="email" autocomplete="email" placeholder="Enter email" required autofocus />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">{{ __('Password') }}</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Enter password" aria-label="Password"
                                            aria-describedby="password-addon" />
                                        <button class="btn btn-light" type="button" id="password-addon">
                                            <i class="mdi mdi-eye-outline"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-check" value="true"
                                        value="{{ old('remember') ? 'checked' : '' }}" />
                                    <label class="form-check-label" for="remember-check">
                                        Remember me
                                    </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        {{ __('Log In') }}
                                    </button>
                                </div>

                                {{-- <div class="mt-4 text-center">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i
                                            class="mdi mdi-lock me-1"></i>
                                        Forgot your
                                        password?</a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
