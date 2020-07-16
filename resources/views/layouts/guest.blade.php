<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Tue Jun 16 2020 12:42:15 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="raka-template.webflow.io" data-wf-page="5ebd71e429b4a7a32e5ab344" data-wf-site="5ea70fb1c50d893eeda7ea48">
<head>
    <meta charset="utf-8"/>
    @yield('meta-data')
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link href="{{ asset('assets/css/guest_main.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Hind Vadodara:300,regular,500,600,700"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        !function(o, c) {
            var n = c.documentElement
                , t = " w-mod-";
            n.className += t + "js",
            ("ontouchstart"in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="{{ asset('assets/img/fav2.jpg')}}" rel="shortcut icon" type="image/x-icon"/>
    <link href="{{ asset('assets/img/fav.jpg')}}" rel="apple-touch-icon"/>
    <style>
        .page-content {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>
<div class="page-content">
    <div id="Top" data-w-id="a153dd51-d165-82ff-43ae-bfb88ac748f6" class="banner">
        <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="4243c171-17c6-df25-2abe-e5e60c18f34f" role="banner" class="navbar second w-nav">
            <div class="container grid w-container">
                <a href="/" id="w-node-e5e60c18f351-0c18f34f" class="brand w-nav-brand">
                    <div data-w-id="4243c171-17c6-df25-2abe-e5e60c18f352" class="logo-text">Amlaen</div>
                </a>
                <nav role="navigation" id="w-node-e5e60c18f354-0c18f34f" class="nav-menu w-nav-menu">
                    <a href="/" class="navlink w-inline-block">
                        <div class="nav-text {{ Request::path() === '/' ? 'active' : '' }}">Home</div>
                        <div class="nav-line"></div>
                    </a>
                    <a href="/about" class="navlink w-inline-block">
                        <div class="nav-text {{ Request::path() === 'about' ? 'active' : '' }}">About</div>
                        <div class="nav-line"></div>
                    </a>
                    <a href="/contact" class="navlink w-inline-block">
                        <div class="nav-text {{ Request::path() === 'contact' ? 'active' : '' }}">Contact</div>
                        <div class="nav-line"></div>
                    </a>
                    <a href="/login" class="navlink w-inline-block">
                        <div class="nav-text">Login</div>
                        <div class="nav-line"></div>
                    </a>
                    <a href="/register" class="navlink w-inline-block">
                        <div class="nav-text">Sign Up</div>
                        <div class="nav-line"></div>
                    </a>
                    <div data-delay="0" data-hover="1" class="w-dropdown">
                        <div class="navlink flex w-dropdown-toggle">
                            <div>
                                <div class="nav-text">Pages</div>
                                <div class="nav-line"></div>
                            </div>
                            <img src="{{asset('assets/img/arrow-down.png')}}" width="7" alt="" class="arrow"/>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <a href="/shop" class="dropdown-link w-dropdown-link">Shop</a>
                            <a href="/legal" class="dropdown-link w-dropdown-link">Legal</a>
                            <a href="/404" class="dropdown-link w-dropdown-link">404 Page</a>
                            <a href="/401" class="dropdown-link w-dropdown-link">Protected Page</a>
                            <a href="/template-info/style-guide" class="dropdown-link w-dropdown-link">Style Guide</a>
                            <a href="/template-info/licensing" class="dropdown-link w-dropdown-link">Licensing</a>
                            <a href="/template-info/changelog" class="dropdown-link w-dropdown-link">Changelog</a>
                        </nav>
                    </div>
                </nav>
                <div id="w-node-e5e60c18f387-0c18f34f" class="menu-button w-nav-button">
                    <div data-w-id="4243c171-17c6-df25-2abe-e5e60c18f388" class="hamburger-line"></div>
                    <div data-w-id="4243c171-17c6-df25-2abe-e5e60c18f389" class="hamburger-line"></div>
                </div>
                @yield('social')
            </div>
        </div>
{{--    header Ended    --}}
        @yield('header-feature')
    </div>
    @yield('content')
{{--    Footer started    --}}
    <div data-w-id="de61e9f5-e22c-ea79-8995-ce18f94a3578" class="footer">
        <div class="container w-container">
            <div class="div-block">
                <h3 class="hero-title center">
                    Let &#x27;s work together.<br/>
                </h3>
                <div class="top-margin more">
                    <div class="align-center">
                        <a href="/contact" target="_blank" class="button lighter w-button">estimate project</a>
                    </div>
                </div>
            </div>
            <div class="margin-page">
                <div>
                    <div class="footer-grid">
                        <div>
                            <div class="logo-div">
                                <a href="#" class="brand white-version w-nav-brand">
                                    <div class="logo-text">Amlaen</div>
                                </a>
                            </div>
                            <div>
                                <a href="{{ url('/contact') }}" class="button color w-button">Contact Us</a>
                            </div>
                        </div>
                        <div class="footer-wrapper">
                            <div class="footer-title">
                                <h4 class="footer-sub-title">Information</h4>
                            </div>
                            <div>
                                <p>
                                    Bouvet Island<br/>
                                    Jeanetteside<br/>
                                    53 Brannon Falls Suite 406<br/>
                                    860-278-8915<br/>support@amlaen.com
                                </p>
                            </div>
                        </div>
                        <div class="footer-wrapper">
                            <div class="footer-title">
                                <h4 class="footer-sub-title">Navigation</h4>
                            </div>
                            <div>
                                <div>
                                    <a href="/" class="nav-link-footer for-footer-version w-inline-block">
                                        <div>Home</div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/about" class="nav-link-footer for-footer-version w-inline-block">
                                        <div>About</div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/contact" class="nav-link-footer for-footer-version w-inline-block">
                                        <div>Contact</div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/login" class="nav-link-footer for-footer-version w-inline-block">
                                        <div>Login</div>
                                    </a>
                                </div>
                                <div>
                                    <a href="/register" class="nav-link-footer for-footer-version w-inline-block">
                                        <div>Sign Up</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-line-divider"></div>
                    <div>
                        <div class="left-copyright-flex full">
                            <a href="{{ url('/terms_and_conditions') }}" class="made-with-webflow left-margin w-inline-block">
                                <div class="coppyright-text">Terms and Conditions</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1 move color"></div>
        <div class="shape-1 _4 for-footer"></div>
    </div>
    <a href="#Top" class="scroll-to-top w-inline-block">
        <div class="scroll-line">
            <div class="line-absolute"></div>
        </div>
        <div class="scroll-text">Scroll to top</div>
    </a>
</div>
{{--<script src="http://unpkg.com/turbolinks"></script>--}}
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea70fb1c50d893eeda7ea48" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/guest_main.js') }}" type="text/javascript"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>
