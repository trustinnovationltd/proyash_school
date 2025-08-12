@extends('frontend.layouts.partials.app')

@section('title', 'Donate Proyash')
@section('website_css')
@endsection
@section('website_content')
    {{-- Start:: Website Title  --}}
    <section class="mb-5">
        <div class="w-100 default  pt-210 black-layer opc7 pb-80 position-relative">
            <div class="fixed-bg"
                style="background-image: url({{ asset('/frontend/assets/uploads/2024/06/specialist.jpg') }});">
            </div>
            <div class="container">
                <div class="page-title-wrap text-center w-100">
                    <div class="page-title-inner d-inline-block">
                        <h1 class="mb-0 text-white">Donate Proyash</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">Donate Proyash</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}

    {{-- start:: Services Section --}}
    <section>
        <div class="set-it-center w-100 pt-100 gray-layer opc2 pb-100 position-relative">
            <div class="container">
                <div class="get-time-request-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div
                                class="request-consult-wrap2 z1 brd-rd10 position-relative overflow-hidden scndry-layer opc98 text-center w-100">
                                <div class="request-consult-title2 w-100">
                                    <h3 class="mb-0">Request a Free
                                        Consultation</h3>
                                    <p class="mb-0">Fill out the form
                                        and we will inform you.</p>
                                </div>
                                <div class="w-100 d-inline-block">

                                    <div class="wpcf7 no-js" id="wpcf7-f274-p890-o1" lang="en-US" dir="ltr"
                                        data-wpcf7-id="274">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form action="https://autism.nautm.com/appointment/#wpcf7-f274-p890-o1"
                                            method="post" class="wpcf7-form init" aria-label="Contact form"
                                            novalidate="novalidate" data-status="init">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="274" />
                                                <input type="hidden" name="_wpcf7_version" value="6.0.6" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f274-p890-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="890" />
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                            </div>
                                            <div class="field-box">
                                                <p><span class="wpcf7-form-control-wrap" data-name="text-5"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required brd-rd5"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Complete Name*" value="" type="text"
                                                            name="text-5" /></span>
                                                </p>
                                            </div>
                                            <div class="field-box">
                                                <p><span class="wpcf7-form-control-wrap" data-name="email-610"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email brd-rd5"
                                                            aria-required="true" aria-invalid="false" value="Email Address*"
                                                            type="email" name="email-610" /></span>
                                                </p>
                                            </div>
                                            <div class="field-box">
                                                <p><span class="wpcf7-form-control-wrap" data-name="tel-12"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel brd-rd5"
                                                            aria-required="true" aria-invalid="false" value="Phone No*"
                                                            type="tel" name="tel-12" /></span>
                                                </p>
                                            </div>
                                            <div class="btn-box">
                                                <p><input
                                                        class="wpcf7-form-control wpcf7-submit has-spinner thm-btn v2 thm-bg brd-rd5 position-relative overflow-hidden"
                                                        type="submit" value="Request Free Session" />
                                                </p>
                                            </div>
                                            <p style="display: none !important;" class="akismet-fields-container"
                                                data-prefix="_wpcf7_ak_">
                                                <label>&#916;
                                                    <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                                </label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js"
                                                    value="159" />
                                                <script>
                                                    document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                                                </script>
                                            </p>
                                            <div class="wpcf7-response-output" aria-hidden="true">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="get-time-wrap position-relative w-100">
                                <div class="get-time-inner d-inline-block w-100">
                                    <div class="sec-title v2 w-100">
                                        <div class="sec-title-inner">
                                            <span class="thm-clr d-block">Work
                                                Schedule</span>
                                            <h2 class="mb-0">Get In
                                                Touch In The Mean Time.
                                            </h2>
                                            <p class="mb-0">Our clinics
                                                have grown to provide
                                                specialized diagnosis
                                                and treatment for autism
                                                spectrum conditions.</p>
                                        </div>
                                    </div><!-- Sec Title -->

                                    <div class="get-time-box brd-rd10 bg-white w-100">
                                        <span
                                            class="d-flex flex-wrap justify-content-between align-items-center w-100">Monday
                                            - Thursday <i>09:00pm -
                                                05:00pm</i></span>
                                        <span
                                            class="d-flex flex-wrap justify-content-between align-items-center w-100">Friday
                                            <i>01:00pm -
                                                05:00pm</i></span>
                                        <span
                                            class="d-flex flex-wrap justify-content-between align-items-center w-100">Saturday
                                            - Sunday <i>11:00am -
                                                03:00pm</i></span>
                                    </div>
                                    <div class="view-more mt-50 d-inline-block w-100">
                                        <p class="mb-0">
                                        <p>Want to visit our clinic?
                                            Please <a href="../contact-us/index.html">Get
                                                In Touch</a> with us.
                                        </p>
                                        </p>
                                    </div><!-- View More -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Get Time & Request Consultation Wrap -->
            </div>
        </div>
    </section>
    {{-- end:: Services Section --}}

@endsection
@section('website_script')
@endsection
