@extends('layouts.auth.auth-layout')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ $routeAction }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="email" @class(['form-control', 'is-invalid' => isInvalidError('email')]) id="inputEmail" type="email"
                                    placeholder="Enter email..." autocomplete="username" value="{{ old('email') }}">
                                <label for="inputEmail">Email</label>
                                <x-error.invalid-feedback fieldName="email" />
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" @class(['form-control', 'is-invalid' => isInvalidError('password')]) id="inputPassword" type="password"
                                    placeholder="Enter password..." autocomplete="current-password">
                                <label for="inputPassword">Password</label>
                                <x-error.invalid-feedback fieldName="password" />
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <span>
                                    <a class="small" href="{{ $routeHome }}">Home</a> /
                                    <a class="small" href="{{ $routeForgotPassword }}">Forgot Password?</a>
                                </span>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
