@extends('layouts.guest')
@section('meta-data')
    <title>Amlaen Digital Marketing Agency | Amlaen.com</title>
    <meta name="og:title" content="Amlaen App">
@endsection
@section('social')
    <div id="w-node-e5e60c18f38a-0c18f34f" class="social-content">
        <a href="#" class="social-icon-2 w-inline-block">
            <img src="{{ asset('assets/img/facebook.png')}}"
                 width="12" alt=""/>
        </a>
        <a href="#" class="social-icon-2 twitter w-inline-block">
            <img src="{{ asset('assets/img/twitter.png')}}"
                 width="12" alt=""/>
        </a>
        <a href="#" class="social-icon-2 insta w-inline-block">
            <img src="{{ asset('assets/img/instagram.png')}}"
                 width="14" alt=""/>
        </a>
    </div>
@endsection
@section('header-feature')
    <div class="container w-container">
        <div class="hero-grid">
            <div>
                <h3 class="logo-heading sub-heading">
                    You deserve a stunning website<br/>
                </h3>
                <h1 class="hero-title">
                    Design visually, create efficiently.<br/>
                </h1>
                <div class="top-margin big">
                    <a href="{{ url('/contact') }}" class="button lighter add-margin w-button">Discus Project</a>
                    <a href="{{ url('/about')}}" class="button color w-button">About Us</a>
                </div>
            </div>
            <div class="hero-photo">
                <div class="big-shape"></div>
                <div data-animation="cross" data-duration="500" data-infinite="1" class="slider w-slider">
                    <div class="w-slider-mask">
                        <div class="slide w-slide">
                            <div class="relative-div">
                                <img src="{{asset('assets/img/b-1.jpg')}}" alt=""
                                     class="main-image"/>
                            </div>
                        </div>
                        <div class="w-slide">
                            <img src="{{asset('assets/img/b-2.jpg')}}" alt=""
                                 class="main-image"/>
                        </div>
                    </div>
                    <div data-w-id="a153dd51-d165-82ff-43ae-bfb88ac7490f" class="left-arrow w-slider-arrow-left">
                        <img src="{{asset('assets/img/left.png')}}" width="22" alt=""/>
                    </div>
                    <div data-w-id="a153dd51-d165-82ff-43ae-bfb88ac74911" class="right-arrow w-slider-arrow-right">
                        <img src="{{asset('assets/img/right.png')}}" width="22" alt=""/>
                    </div>
                    <div class="slide-nav w-slider-nav w-round"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-1"></div>
    <div class="shape-1 _2"></div>
@endsection
@section('content')
    <div class="section">
        <div class="container for-logos w-container">
            <div>
                <h3 class="logo-heading">Trusted by best brands</h3>
            </div>
            <div class="logo-wrapper">
                <div class="logo-client-wrapper">
                    <div class="logo-client">
                        <img src="{{asset('assets/img/ideaa.png')}}" width="120" alt=""/>
                    </div>
                    <div class="logo-client">
                        <img src="{{asset('assets/img/zoo-tv.png')}}" width="130" alt=""/>
                    </div>
                    <div class="logo-client">
                        <img src="{{asset('assets/img/code-lab.png')}}" width="135" alt=""/>
                    </div>
                    <div class="logo-client">
                        <img src="{{asset('assets/img/circle.png')}}" width="125" alt=""/>
                    </div>
                    <div class="logo-client">
                        <img src="{{asset('assets/img/kanba.png')}}" width="125" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-page">
            <div class="container w-container">
                <div class="top-title">
                    <h4 class="meta-sub">Our Services</h4>
                    <h3 class="top-title-text">
                        We build experience<br/>
                    </h3>
                </div>
                <div class="features-grid">
                    <div class="features-content">
                        <div class="features-icon">
                            <div class="big-shape in-features"></div>
                            <img src="{{ asset('assets/img/search-512.png') }}" width="60" alt=""
                                 class="features-real-icon"/>

                        </div>
                        <h2 class="features-title">SEO</h2>
                        <p>
                            Our team of SEO experts provide best SEO solution for the scaling of your website on the
                            web.
                        </p>
                    </div>
                    <div class="features-content">
                        <div class="features-icon">
                            <div class="big-shape in-features"></div>
                            <img src="{{ asset('assets/img/laptop-coding-500.png')}}"
                                 width="60" alt="" class="features-real-icon"/>
                        </div>
                        <h2 class="features-title">Development</h2>
                        <p>
                            Build your perfect website. We create powerful brand-centric and functional sites
                        </p>
                    </div>
                    <div class="features-content">
                        <div class="features-icon">
                            <div class="big-shape in-features"></div>
                            <img src="{{ asset('assets/img/marketing-100.png') }}" width="55" alt=""
                                 class="features-real-icon"/>
                        </div>
                        <h2 class="features-title">Social Media Marketing</h2>
                        <p>
                            Let's grow your business using the powerful platforms of social media marketing and engage
                            with your users.
                        </p>
                    </div>
                    <div class="features-content">
                        <div class="features-icon">
                            <div class="big-shape in-features"></div>
                            <img src="{{ asset('assets/img/web-design-100.png') }}" width="55" alt=""
                                 class="features-real-icon"/>
                        </div>
                        <h2 class="features-title">UI/UX</h2>
                        <p>
                            Want to make your website app’s user experience more engaging? We can help. We are the
                            experts.
                        </p>
                    </div>
                    <div class="features-content">
                        <div class="features-icon">
                            <div class="big-shape in-features"></div>
                            <img src="{{ asset('assets/img/web-analytics-100.png') }}" width="55" alt=""
                                 class="features-real-icon"/>
                        </div>
                        <h2 class="features-title">
                            Analytics<br/>
                        </h2>
                        <p>
                            We are highly capable of observing and finding the reasons for your business problems along
                            with potential solutions.
                        </p>
                    </div>
                    <div class="features-content">
                        <div class="features-icon">
                            <div class="big-shape in-features"></div>
                            <img src="{{ asset('assets/img/camera-identification-100.png') }}" width="55" alt=""
                                 class="features-real-icon"/>
                        </div>
                        <h2 class="features-title">Branding</h2>
                        <p>
                            Without branding it is difficult to promote your business as you desire. Our team of expert
                            digital marketers is ready for branding of your business.
                        </p>
                    </div>
                </div>
                <div class="top-margin">
                    <div class="align-center">
                        <a href="/contact" class="button w-button">let &#x27;s talk</a>
                    </div>
                </div>
                <div class="margin-page">
                    <div class="illustration-grid">
                        <div>
                            <img src="{{ asset('assets/img/illustration.jpg')}}"
                                 sizes="(max-width: 479px) 100vw, (max-width: 991px) 90vw, 43vw"
                                 alt="Carton illustration"/>
                        </div>
                        <div class="left-padding">
                            <div class="top-title _2-column">
                                <h4 class="meta-sub">
                                    what we do<br/>
                                </h4>
                                <h3 class="top-title-text">
                                    We help to create<br/>
                                    visual strategies<br/>
                                </h3>
                            </div>
                            <div>
                                <div data-w-id="a153dd51-d165-82ff-43ae-bfb88ac74986" class="toggle-wrapper">
                                    <a href="#" class="toggle-header w-inline-block">
                                        <div class="toogle-icon">
                                            <div class="line-1"></div>
                                            <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0)"
                                                 class="line-2"></div>
                                        </div>
                                        <div>Pixel Perfect Design</div>
                                    </a>
                                    <div style="height:0PX" class="toggle-content">
                                        <div style="-webkit-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                             class="toggle-space">
                                            <p>From massive enterprise-grade applications to niche website portals, we
                                                have designed all types of Web solutions with pixel perfect Design.</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-w-id="a153dd51-d165-82ff-43ae-bfb88ac74991" class="toggle-wrapper">
                                    <a href="#" class="toggle-header w-inline-block">
                                        <div class="toogle-icon">
                                            <div class="line-1"></div>
                                            <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0)"
                                                 class="line-2"></div>
                                        </div>
                                        <div>User Experience</div>
                                    </a>
                                    <div style="height:0PX" class="toggle-content">
                                        <div style="-webkit-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                             class="toggle-space">
                                            <p class="paragraph">Want to make your app’s user experience more engaging?
                                                We can help. We are the experts</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-w-id="a153dd51-d165-82ff-43ae-bfb88ac7499c" class="toggle-wrapper">
                                    <a href="#" class="toggle-header w-inline-block">
                                        <div class="toogle-icon">
                                            <div class="line-1"></div>
                                            <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90DEG) skew(0, 0)"
                                                 class="line-2"></div>
                                        </div>
                                        <div>Mobile Application</div>
                                    </a>
                                    <div style="height:0PX" class="toggle-content">
                                        <div style="-webkit-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 5PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                             class="toggle-space">
                                            <p class="paragraph">We design pervasive user interface experience for
                                                mobile applications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-margin more">
                                <div>
                                    <a href="/about" class="button color w-button">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-w-id="a153dd51-d165-82ff-43ae-bfb88ac74a03" class="section blue">
        <div class="shape-1 move"></div>
        <div class="shape-1 _4"></div>
        <div class="shape-1 _2 move"></div>
        <div class="shape-1 _2 _3"></div>
        <div class="container w-container">
            <div class="align-center">
                <h2 class="hero-title">
                    Build your website with Amlaen.<br/>
                </h2>
            </div>
            <div class="top-margin more">
                <div class="align-center">
                    <a href="{{ url('/contact') }}" class="button color w-button">Discus Project</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section gray with-shape">
        <div class="container w-container">
            <div class="illustration-grid">
                <div>
                    <div class="left-padding right">
                        <div class="top-title _2-column"><h3 class="meta-sub">fun facts<br></h3>
                            <h3 class="top-title-text">What make us so special<br></h3></div>
                        <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                        </div>
                        <div class="top-margin more">
                            <div><a href="/about" class="button lighter w-button">work with us</a></div>
                        </div>
                    </div>
                </div>
                <div id="w-node-299421646669-bba7ea4a" class="fun-facts-grid">
                    <div>
                        <div class="fun-facts-content"><img
                                    src="{{asset('assets/img/user-male-500%20(1).png')}}"
                                    width="60" alt="" class="fun-icon">
                            <h3 class="fun-title">10+</h3>
                            <div class="category">Team member</div>
                        </div>
                        <div class="fun-facts-content _0-bottom"><img
                                    src="{{asset('assets/img/facebook-like-500%20(1).png')}}"
                                    width="50" alt="" class="fun-icon">
                            <h3 class="fun-title">99%<br></h3>
                            <div class="category">Positive feedback</div>
                        </div>
                    </div>
                    <div class="top-margin more">
                        <div class="fun-facts-content"><img
                                    src="{{asset('assets/img/alarm-clock-500%20(1).png')}}"
                                    width="50" alt="" class="fun-icon">
                            <h3 class="fun-title">105</h3>
                            <div class="category">Sleepless Hours<br></div>
                        </div>
                        <div class="fun-facts-content"><img
                                    src="{{asset('assets/img/cafe-500%20(1).png')}}"
                                    width="60" alt="" class="fun-icon">
                            <h3 class="fun-title">700+<br></h3>
                            <div class="category">Cups of Coffee<br></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="margin-page double">
                <div class="illustration-grid">
                    <div id="w-node-e744d1ca0aef-bba7ea4a" class="mascout"><img
                                src="{{asset('assets/img/illustration-2.jpg')}}"
                                sizes="(max-width: 479px) 100vw, (max-width: 991px) 77vw, 36vw" alt=""
                                class="illustration"></div>
                    <div class="left-padding">
                        <div class="top-title _2-column"><h3 class="meta-sub">testimonials<br></h3>
                            <h3 class="top-title-text">What people think about Amlaen<br></h3></div>
                        <div>
                            <div data-animation="outin" data-duration="500" data-infinite="1"
                                 class="slider-testimonials w-clearfix w-slider">
                                <div class="w-slider-mask">
                                    <div class="w-slide" style="transform: translateX(0px); opacity: 1; z-index: 3;">
                                        <div class="w-clearfix">
                                            <div class="testimonials-photo"></div>
                                            <div class="testimonials-content"><p>"Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Suspendisse varius enim in eros
                                                    elementum tristique, duis cursus"</p><h5 class="testimonials-name">
                                                    John Doe</h5>
                                                <div class="top-left-text in-testimonials">Founder of Raka</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-slide"
                                         style="transform: translateX(0px); opacity: 1; z-index: 1; visibility: hidden;">
                                        <div class="w-clearfix">
                                            <div class="testimonials-photo photo-2"></div>
                                            <div class="testimonials-content"><p>"Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Suspendisse varius enim in eros
                                                    elementum tristique, duis cursus"</p><h5 class="testimonials-name">
                                                    John Doe</h5>
                                                <div class="top-left-text in-testimonials">Founder of Raka</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-slide"
                                         style="transform: translateX(0px); opacity: 1; z-index: 2; visibility: hidden;">
                                        <div class="w-clearfix">
                                            <div class="testimonials-photo photo-3"></div>
                                            <div class="testimonials-content"><p>"Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Suspendisse varius enim in eros
                                                    elementum tristique, duis cursus"</p><h5 class="testimonials-name">
                                                    John Doe</h5>
                                                <div class="top-left-text in-testimonials">Founder of Raka</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-navigation w-slider-nav w-slider-nav-invert w-round">
                                    <div class="w-slider-dot w-active" data-wf-ignore=""></div>
                                    <div class="w-slider-dot" data-wf-ignore=""></div>
                                    <div class="w-slider-dot" data-wf-ignore=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection