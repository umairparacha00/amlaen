@extends('layouts.guest')
@section('meta-data')
    <title>About | Amlaen.com</title>
    <meta name="og:title" content="Amlaen App">
@endsection
@section('header-feature')
    <div class="container w-container">
        <div class="align-center">
            <h2 class="logo-heading sub-heading center">
                Interesting facts about our specialists<br/>
            </h2>
            <h1 class="hero-title">
                About Amlaen<br/>
            </h1>
        </div>
    </div>
    <div class="overlay-shapes">
        <div class="shape-1 in-sub"></div>
        <div class="shape-1 _2 for-sub"></div>
    </div>
@endsection
@section('content')
    <div class="section">
        <div>
            <div class="container for-sub w-container">
                <div class="illustration-grid">
                    <div class="left-padding right">
                        <div class="top-title _2-column">
                            <h3 class="meta-sub">
                                our power<br/>
                            </h3>
                            <h3 class="top-title-text">
                                Our vision about Web.<br/>
                            </h3>
                        </div>
                        <div>
                            <p>Amlaen is an advertising platform that is highly concerned to win the trust of clients. Our Vision is to
                                offer good deals of services including web development, social media marketing,
                                search engine marketing, branding also much more and make a website for you that reflects your business.</p>
                        </div>
                        <div class="top-margin more">
                            <div>
                                <a class="button am-button" href="/contact">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="lightbox-link inline-block w-lightbox" href="#">
                            <img alt=""
                                 class="image-radius"
                                 sizes="(max-width: 479px) 100vw, (max-width: 991px) 90vw, 43vw"
                                 src="{{asset('assets/images/b-2.webp')}}"
                            />
                        </div>
                    </div>
                </div>
                <div class="margin-page">
                    <div class="top-title">
                        <h3 class="meta-sub">the team</h3>
                        <h3 class="top-title-text">
                            It &#x27;s all about the people<br/>
                        </h3>
                    </div>
                    <div>
                        <div class="team-grid">
                            <div class="team-wrapper">
                                <div class="team-image">
                                    <img alt=""
                                         class="member-image"
                                         sizes="(max-width: 767px) 81vw, (max-width: 991px) 54vw, 27vw"
                                         src="{{ asset('assets/images/about-p-pic-3.webp')}}"/>
                                </div>
                                <div class="team-content">
                                    <h4 class="heading-white">william lee</h4>
                                    <div class="top-small-title white smaller">CO Founder</div>
                                </div>
                            </div>
                            <div class="team-wrapper" data-ix="show-social-team-on-hover">
                                <div class="team-image">
                                    <img alt=""
                                         class="member-image"
                                         sizes="(max-width: 767px) 81vw, (max-width: 991px) 54vw, 27vw"
                                         src="{{ asset('assets/images/about_p_pic.webp')}}"/>
                                </div>
                                <div class="team-content">
                                    <h4 class="heading-white">Laura William</h4>
                                    <div class="top-small-title white smaller">Senior Designer</div>
                                </div>
                            </div>
                            <div class="team-wrapper" data-ix="new-interaction">
                                <div class="team-image">
                                    <img alt=""
                                         class="member-image"
                                         sizes="(max-width: 767px) 81vw, (max-width: 991px) 54vw, 27vw"
                                         src="{{ asset('assets/images/about-p-pic-1.webp')}}"/>
                                </div>
                                <div class="team-content">
                                    <h4 class="heading-white">John doe</h4>
                                    <div class="top-small-title white smaller">Developer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section gray with-shape">
        <div class="container w-container">
            <div>
                <div class="illustration-grid">
                    <div>
                        <div class="left-padding right">
                            <div class="top-title _2-column">
                                <h3 class="meta-sub">
                                    contact<br/>
                                </h3>
                                <h1 class="top-title-text">
                                    Stay in touch<br/>
                                </h1>
                            </div>
                            <div>
                                <div class="form-block w-form">
                                    <form data-name="Email Form" id="email-form" name="email-form">
                                        <div class="form-grid">
                                            <div>
                                                <label class="category">
                                                    Name<span class="color">*</span>
                                                </label>
                                                <input class="text-field-primary w-input" data-name="Name" id="name"
                                                       maxlength="256" name="name" placeholder="Your Name" required=""
                                                       type="text"/>
                                            </div>
                                            <div>
                                                <label class="category">Company</label>
                                                <input class="text-field-primary w-input" data-name="Company"
                                                       id="Company"
                                                       maxlength="256" name="Company" placeholder="Company Name"
                                                       type="text"/>
                                            </div>
                                            <div>
                                                <label class="category" for="Email">
                                                    Email<span class="color">*</span>
                                                </label>
                                                <input class="text-field-primary w-input" data-name="Email" id="Email"
                                                       maxlength="256" name="Email" placeholder="Your working Email"
                                                       required="" type="email"/>
                                            </div>
                                            <div>
                                                <label class="category" for="Email">
                                                    Category<span class="color">*</span>
                                                </label>
                                                <div class="text-field-primary for-select">
                                                    <select class="select-field w-select" data-name="Field" id="field"
                                                            name="field"
                                                            required="">
                                                        <option value="">Website</option>
                                                        <option value="First">Marketing</option>
                                                        <option value="Second">Application</option>
                                                        <option value="Third">Branding</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="category" for="Email">phone</label>
                                                <input class="text-field-primary w-input" data-name="Phone Number"
                                                       id="Phone-Number"
                                                       maxlength="256" name="Phone-Number"
                                                       placeholder="Phone Number" required="" type="tel"/>
                                            </div>
                                            <div>
                                                <label class="category" for="Email">
                                                    budget<span class="color">*</span>
                                                </label>
                                                <div class="text-field-primary for-select">
                                                    <select class="select-field w-select" data-name="Field 2"
                                                            id="field-2" name="field-2"
                                                            required="">
                                                        <option value="">Less then 5k</option>
                                                        <option value="First">5k-10k</option>
                                                        <option value="Second">Over 10k</option>
                                                        <option value="Third">Please Advice</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-margin _16px">
                                            <label class="category" for="Message">Project details</label>
                                            <textarea class="text-field-primary area w-input" data-name="Message"
                                                      id="Message"
                                                      maxlength="5000" name="Message"
                                                      placeholder="Enter your brief"></textarea>
                                        </div>
                                        <div class="top-margin">
                                            <input class="button color am-button" data-wait="Please wait..."
                                                   type="submit"
                                                   value="Send Message"/>
                                        </div>
                                    </form>
                                    <div class="success-message f-d-none">
                                        <div>Thank you! Your message has been received!</div>
                                    </div>
                                    <div class="error-message w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img alt="A person is sitting on a chair and working on a laptop."
                         class="main-image"
                         sizes="(max-width: 479px) 100vw, (max-width: 991px) 90vw, 43vw"
                         src="{{asset('assets/images/b-3.webp')}}"
                    />
                </div>
            </div>
        </div>
    </div>
@endsection