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
        .fuh_674_hjkf .form-group.kl23_3rte3 input {
            background-image: url({{ asset('assets/images/icons/password-icon.png')}});
            background-repeat: no-repeat;
            background-position: center right 13px
        }
        @yield('style')
        .fuh_674_hjkf{
            position: relative;
        }
        .loader{
            display:flex;
            position: absolute;
            left: 0%;
            top: 0%;
            right: 0%;
            bottom: 0%;
            z-index: 9999;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(0,0,0,.5);
        }
        @media (max-width: 240px) {
            .login-form .plk_08w03 .plk_08w009, .login-form .plk_08w03 .plk_09820b {
                text-align: center !important;
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
                    <div class="loader-wrapper">
                        <div id="loader" class="loader">
                            <img src="{{ asset('assets/images/svg/loader.svg') }}"
                                 width="75" alt="" class="loading-image"
                                 style="opacity: 1;"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut(200, function () {
            $('#loader').removeClass('loader');
        });
    });
</script>
</body>
</html>
