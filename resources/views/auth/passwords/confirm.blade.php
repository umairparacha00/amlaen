@extends('layouts.guest_2')
@section('meta-data')
    <title> Password Reset | Amlaen.com</title>
    <meta
            name="description"
            content="Amlaen is one of the top advertisers which provides numerous options to boots and enhance your Viewership and Brading."
    />
    <meta
            name="Keywords"
            content="Amlaen password reset, Amlaen.com, Digital Marketing, Amlaen Digital Marketing Agency"
    />
@endsection
@section('style')
    .login-button {
    clear: both;
    margin-bottom: 15px;
    -webkit-box-shadow: 2px 5px 14px 1px #ccc;
    box-shadow: 2px 5px 14px 1px #ccc;
    }
    .login-button .btn {
    background-color: var(--secondary-color);
    border: 1px solid var(--secondary-color);
    padding: 10px 40px;
    border-radius: 0;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    }
    .login-button .btn:hover{
    box-shadow: 0 8px 25px -8px var(--secondary-color2);
    color: white;
    }
    .plk_08w009 a, .plk_08w009 span {
    color: var(--secondary-color2)
    }
@endsection
@section('form')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirm Password') }}</div>

                    <div class="card-body">
                        {{ __('Please confirm your password before continuing.') }}

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
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
    </div>
@endsection
