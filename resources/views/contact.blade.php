@extends('layouts.guest')
@section('meta-data')
    <title>Contact Us | Amlaen.com</title>
    <meta content="Home" property="og:title"/>
@endsection
@section('header-feature')
    <div class="container w-container">
        <div class="align-center"><h2 class="logo-heading sub-heading center">We'd love to hear from you<br></h2>
            <h3 class="hero-title">Contact Us<br></h3></div>
    </div>
    <div class="overlay-shapes">
        <div class="shape-1 in-sub"></div>
        <div class="shape-1 _2 for-sub"></div>
    </div>
@endsection
@section('content')
    <div class="section gray with-shape">
        <div class="container for-sub w-container">
            <div>
                <div class="illustration-grid">
                    <div>
                        <div class="left-padding right">
                            <div class="top-title _2-column"><h3 class="meta-sub">contact<br></h3>
                                <h3 class="top-title-text">Stay in touch<br></h3></div>
                            <div>
                                <div class="form-block w-form">
                                    <form id="email-form" name="email-form" data-name="Email Form">
                                        <div class="form-grid">
                                            <div><label class="category">Name<span class="color">*</span></label><input
                                                        type="text" class="text-field-primary w-input" maxlength="256"
                                                        name="name" data-name="Name" placeholder="Your Name" id="name"
                                                        required=""></div>
                                            <div><label class="category">Company</label><input type="text"
                                                                                               class="text-field-primary w-input"
                                                                                               maxlength="256"
                                                                                               name="Company"
                                                                                               data-name="Company"
                                                                                               placeholder="Company Name"
                                                                                               id="Company"></div>
                                            <div><label for="Email" class="category">Email<span
                                                            class="color">*</span></label><input type="email"
                                                                                                 class="text-field-primary w-input"
                                                                                                 maxlength="256"
                                                                                                 name="Email"
                                                                                                 data-name="Email"
                                                                                                 placeholder="Your working Email"
                                                                                                 id="Email" required="">
                                            </div>
                                            <div><label for="Email" class="category">Category<span
                                                            class="color">*</span></label>
                                                <div class="text-field-primary for-select"><select id="field"
                                                                                                   name="field"
                                                                                                   required=""
                                                                                                   data-name="Field"
                                                                                                   class="select-field w-select">
                                                        <option value="">Website</option>
                                                        <option value="First">Marketing</option>
                                                        <option value="Second">Application</option>
                                                        <option value="Third">Branding</option>
                                                    </select></div>
                                            </div>
                                            <div><label for="Email" class="category">phone</label><input type="tel"
                                                                                                         class="text-field-primary w-input"
                                                                                                         maxlength="256"
                                                                                                         name="Phone-Number"
                                                                                                         data-name="Phone Number"
                                                                                                         placeholder="Phone Number"
                                                                                                         id="Phone-Number"
                                                                                                         required="">
                                            </div>
                                            <div><label for="Email" class="category">budget<span class="color">*</span></label>
                                                <div class="text-field-primary for-select"><select id="field-2"
                                                                                                   name="field-2"
                                                                                                   required=""
                                                                                                   data-name="Field 2"
                                                                                                   class="select-field w-select">
                                                        <option value="">Less then 5k</option>
                                                        <option value="First">5k-10k</option>
                                                        <option value="Second">Over 10k</option>
                                                        <option value="Third">Please Advice</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="top-margin _16px"><label for="Message" class="category">Project
                                                details</label><textarea placeholder="Enter your brief" maxlength="5000"
                                                                         id="Message" name="Message" data-name="Message"
                                                                         class="text-field-primary area w-input"></textarea>
                                        </div>
                                        <div class="top-margin"><input type="submit" value="Send Message"
                                                                       data-wait="Please wait..."
                                                                       class="button color am-button"></div>
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
                    <img src="{{asset('assets/images/b-3.webp')}}"
                         sizes="(max-width: 479px) 100vw, (max-width: 991px) 90vw, 42vw" alt="" class="main-image">
                </div>
            </div>
        </div>
    </div>
@endsection