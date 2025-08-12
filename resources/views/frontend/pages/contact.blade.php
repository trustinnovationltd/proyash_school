@extends('frontend.layouts.partials.app')

@section('title', 'Contact Us')
@section('website_css')
@endsection
@section('website_content')
    {{-- Start:: Website Title  --}}
    <section>
        <div class="w-100 default  pt-210 black-layer opc7 pb-80 position-relative">
            <div class="fixed-bg"
                style="background-image: url({{ asset('/frontend/assets/uploads/2024/06/specialist.jpg') }});">
            </div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0 text-white">Contact Us</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}

    <section>
        <div class="w-100 contact-info pt-100 pb-30 position-relative">
            <div class="container">
                <div class="sec-title3 text-center w-100">
                    <div class="sec-title3-inner d-inline-block">
                        <h3 class="mb-0">CONTACT INFORMATION</h3>
                        <p class="mb-0">
                            We're here to support, listen, and guide — reach out to Proyash Jessore today
                        </p>
                    </div>
                </div>
                <div class="contact-info-wrap text-center position-relative w-100">
                    <div class="row mrg30">

                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box position-relative w-100">
                                <i class="fas fa-envelope brd-rd10 d-inline-block scndry-clr"></i>
                                <span class="d-block">admin@proyash.edu.bd</span>
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box position-relative w-100">
                                <i class="fas fa-home brd-rd10 d-inline-block scndry-clr"></i>
                                <span class="d-block">Proyash, Jessore Area</span>
                                <span class="d-block">Jessore Cantonment, Jessore</span>
                            </div>
                        </div>


                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="contact-info-box position-relative w-100">
                                <i class="fas fa-phone-alt brd-rd10 d-inline-block scndry-clr"></i>
                                <span class="d-block">01769-553729</span>
                            </div>
                        </div>


                    </div>
                </div><!-- Contact Info Wrap -->
                <div class="social-links3 v2 mb-05 d-flex flex-wrap justify-content-center align-items-center w-100">
                    <h3 class="mb-0">Contact Us Via:</h3>
                    <a class="brd-rd5 twitter-hvr" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="brd-rd5 twitter-hvr" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="brd-rd5 twitter-hvr" href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="brd-rd5 twitter-hvr" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section>


    {{-- Start:: Our Location Section --}}
    <section>
        <div class="w-100 contact-info pt-100 pb-30 position-relative">
            <div class="container">
                <div class="sec-title3 text-center w-100">
                    <div class="sec-title3-inner d-inline-block">
                        <h3 class="mb-0">Our Location</h3>
                        <p class="mb-0">
                            A safe space in Jessore for learning, healing, and growing
                        </p>
                    </div>
                </div>


                <div class="contact-info-wrap text-center position-relative w-100">
                    <div class="row mrg30">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.6785543324606!2d89.1811711853004!3d23.17035330772081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff10b9979f3c71%3A0x52301ffa84ab7d09!2sJashore%20Proyash!5e1!3m2!1sen!2sbd!4v1753337974461!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Our Location Section --}}

    <section>
        <div class="w-100 pt-100 gray-layer opc7 pb-100 position-relative">
            <div class="fixed-bg"
                style="background-image: url({{ asset('/frontend/assets/uploads/school/school1.jpeg') }});">
            </div>
            <div class="container">
                <div class="sec-title4 text-center w-100">
                    <div class="sec-title4-inner d-inline-block">
                        <h2 class="mb-0">GET IN TOUCH</h2>
                        <p class="mb-0">We will connect back to you in
                            next few moments.</p>
                    </div>
                </div>
                <div class="contact-form d-flex flex-wrap justify-content-center text-center w-100">
                    <div class="w-100" id="email-form">
                        <div class="response w-100"></div>
                        <p>
                        <div class="wpcf7 no-js" id="wpcf7-f805-p517-o1" lang="en-US" dir="ltr" data-wpcf7-id="805">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="805" />
                                    <input type="hidden" name="_wpcf7_version" value="6.0.6" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f805-p517-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="517" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                </div>
                                <p><span class="wpcf7-form-control-wrap" data-name="text-242"><input size="40"
                                            maxlength="400"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required brd-rd10"
                                            aria-required="true" aria-invalid="false" placeholder="First Name*"
                                            value="" type="text" name="text-242" /></span><br />
                                    <span class="wpcf7-form-control-wrap" data-name="email-282"><input size="40"
                                            maxlength="400"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email brd-rd10"
                                            aria-required="true" aria-invalid="false" placeholder="Email Address*"
                                            value="" type="email" name="email-282" /></span><br />
                                    <span class="wpcf7-form-control-wrap" data-name="text-562"><input size="40"
                                            maxlength="400"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required brd-rd10"
                                            aria-required="true" aria-invalid="false" placeholder="Subject"
                                            value="" type="text" name="text-562" /></span><br />
                                    <span class="wpcf7-form-control-wrap" data-name="textarea-825">
                                        <textarea cols="40" rows="10" maxlength="2000"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required brd-rd10" aria-required="true"
                                            aria-invalid="false" placeholder="Message Here" name="textarea-825"></textarea>
                                    </span><br />
                                    <input
                                        class="wpcf7-form-control wpcf7-submit has-spinner thm-btn scndry-bg brd-rd10 position-relative overflow-hidden"
                                        type="submit" value="Contact Us" />
                                </p>
                            </form>
                        </div>
                        </p>
                    </div>
                </div><!-- Contact Form -->
            </div>
        </div>
    </section>

@endsection
@section('website_script')
@endsection
