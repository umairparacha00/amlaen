<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('meta-data')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato|Proza+Libre:400,700i&display=swap");

        :root {
            --main-color: #000000;
            --secondary-color: #392396;
            --secondary-color2: #2e158c;
            --heading-color: #392396;
            --para-color: #777777
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            font-family: Lato, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color) !important;
            background-image: none;
            font-size: 16px;
            box-sizing: border-box
        }

        header {
            display: block !important
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700 !important;
            margin: 0 0 20px !important
        }

        fieldset, form, h1, h2, h3, h4, h5, h6, input, p, ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        a:focus, a:hover {
            text-decoration: underline
        }

        button:focus {
            outline: 0 !important
        }

        img, svg {
            vertical-align: middle
        }

        .login-page {
            padding: 3em 1em
        }

        .main-title {
            font-family: "Proza Libre", sans-serif !important;
            text-align: center;
            color: var(--secondary-color);
            font-style: italic
        }

        .fuh_674_hjkf {
            width: 450px;
            margin: 0 auto;
            max-width: 450px;
            padding: 1.87em;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 5px 10px 50px 0 rgba(0, 0, 0, .4);
            -webkit-box-shadow: 5px 10px 50px 0 rgba(0, 0, 0, .4);
            -moz-box-shadow: 5px 10px 50px 0 rgba(0, 0, 0, .4)
        }

        .fuh_674_hjkf .h3 {
            text-align: center;
            color: var(--main-color);
            font-size: 24px
        }

        .fuh_674_hjkf .form-control::placeholder {
            color: #999
        }

        .fuh_674_hjkf .form-group.emi_j4gk {
            margin-bottom: 15px
        }

        .fuh_674_hjkf .form-control {
            border: 1px solid #d1d1d1;
            padding: 14px 27px 14px 13px;
            color: #212529;
            border-radius: 0;
            height: 40px;
            -webkit-box-shadow: 2px 5px 14px 1px #ccc;
            box-shadow: 2px 5px 14px 1px #ccc
        }

        .fuh_674_hjkf .emi_j4gk input {
            background-image: url({{asset('assets/images/icons/user-icon.png')}});
            background-repeat: no-repeat;
            background-position: center right 13px
        }
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
        .fuh_674_hjkf .form-group.kl23_3rte3 input {
            background-image: url({{ asset('assets/images/icons/password-icon.png')}});
            background-repeat: no-repeat;
            background-position: center right 13px
        }

        .buttons {
            display: inline
        }

        .plk_09nkj34 {
            float: left
        }

        .re-button {
            float: right
        }

        .plk_09nkj34 .btn {
            background: #392396;
            padding: 10px 40px;
            border-radius: 0;
            border: none;
            color: #fff;
            font-size: 15px;
            font-weight: 700
        }

        .plk_09nkj34:hover .btn {
            box-shadow: 0 8px 25px -8px #7367f0
        }

        .re-button .btn {
            border: 1px solid var(--secondary-color);
            padding: 9px 35px;
            border-radius: 0;
            color: var(--secondary-color);
            font-size: 15px;
            font-weight: 700
        }

        .re-button:hover .btn {
            background: #392396;
            color: #fff;
            border: 1px solid transparent
        }

        .plk_08w03 {
            padding-bottom: 2em
        }

        .login-form .plk_08w03 .plk_08w009 {
            float: left;
            min-width: 50%
        }

        .plk_08w009 a, .plk_08w009 span {
            color: var(--secondary-color2)
        }

        .plk_09820b {
            float: right;
            min-width: 50%
        }

        .plk_08w03 .plk_09820b, .plk_08w03 .plk_09820b a {
            color: #555
        }

        .loading {
            overflow: hidden;
            height: 100vh
        }

        .spinner-wrapper {
            width: 100%;
            height: 100%;
            background-color: #fff;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9999;
            display: flex;
            overflow: hidden;
            align-items: center;
            justify-content: center
        }

        .spinner {
            position: relative;
            width: 4rem;
            height: 4rem;
            border-radius: 50%
        }

        .spinner::after, .spinner::before {
            content: "";
            position: absolute;
            border-radius: 50%
        }

        .spinner:before {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(90deg, #10163a 0, #645bd3 100%);
            animation: spin .5s infinite linear
        }

        .spinner:after {
            width: 90%;
            height: 90%;
            background-color: #fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        @media (max-width: 240px) {
            .login-form .plk_08w03 .plk_08w009, .login-form .plk_08w03 .plk_09820b {
                text-align: center !important
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>

<body>
<div>
    <div class="container-fluid login-page">
        <div class="container">
            <div class="row">
                <div class="fuh_674_hjkf">
                    <div class="main-title">
                        <h1>Amlaen</h1>
                    </div>
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
