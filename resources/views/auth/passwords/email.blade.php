{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
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
    <form method="POST" class="login-form"  action="{{ route('password.email') }}">
        @csrf
        <h1 class="h3 text-uppercase">{{ __('RECOVER YOUR PASSWORD') }}</h1>
        @error('username')
        <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
        @if (session('status'))
            <div class="alert alert-success w-100 alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="form-group emi_j4gk">
            <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required="required"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    autofocus
                    class="form-control"
            />
        </div>
        <div class="login-button">
            <button type="submit" class="btn btn-lg btn-block text-uppercase">Submit</button>
        </div>
        <div class="plk_08w03">
            <div class="plk_08w009 pr">
                <a href="{{ url('/') }}">Home</a> | <a href="{{ url('register') }}">Create a Account</a>
            </div>
        </div>
    </form>
@endsection