@extends('layouts.guest_2')
@section('meta-data')
    <title>Login-Amlaen.com</title>
    <meta
            name="description"
            content="Amlaen is one of the top advertisers which provides numerous options to boots and enhance your Viewership and Brading."
    />
    <meta
            name="Keywords"
            content="Amlaen login, Amlaen.com, Digital Marketing, Amlaen Digital Marketing Agency"
    />
@endsection
@section('form')
    <form autocomplete="off" method="POST" class="login-form" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 text-uppercase">Login to Your Account</h1>
        @error('password')
        <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
        @error('username')
        <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
        @error('email')
        <div class="alert alert-danger w-100 alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
        <div class="form-group emi_j4gk">
            <input
                    type="text"
                    id="login"
                    name="login"
                    placeholder="Username Or Email"
                    required="required"
                    value="{{ old('username') ?: old('email') }}"
                    autofocus="autofocus"
                    class="form-control"
            />
        </div>

        <div class="form-group kl23_3rte3">
            <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    required="required"
                    class="form-control"
            />
        </div>
        <div class="plk_08w03">
            <div class="plk_08w009 pr">
                <a href="{{ url('/') }}">Home</a>
            </div>
            <div class="plk_09820b text-right">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
        <div class="buttons">
            <div class="plk_09nkj34">
                <button type="submit" class="btn text-uppercase">
                    Login
                </button>
            </div>
            <div class="re-button">
                <a href="{{ url('register') }}" class="btn text-uppercase"
                >Register</a
                >
            </div>
        </div>
    </form>
@endsection