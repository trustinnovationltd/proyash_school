@extends('frontend.layouts.partials.app')

@section('title', 'About Us')
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
                        <h1 class="mb-0 text-white">About Us</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}

    {{-- Start:: About Us Section --}}
    <section>
        <div class="w-100 pt-75 white-layer opc8 pb-120 position-relative padd-top-mob">
            <div class="container">
                <div class="about-wrap3 position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                            <div class="sn-about-img about-img position-relative w-100">
                                <img decoding="async" class="img-fluid w-100"
                                    src="{{ asset('/frontend/assets/uploads/school/school1.jpeg') }}" alt="">
                                <div class="social-links4 position-absolute">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="about-desc v2 w-100">
                                <span class="thm-clr d-inline-block border-0">Supporting Every Step Forward</span>

                                <h2 class="mb-10">With Compassionate <strong>Therapists</strong>,
                                    Life Skills
                                    <strong>Experts</strong> & <strong>Motivational</strong> Care
                                </h2>
                                <p class="mb-0">
                                    Proyash, Jashore Area is a specialized institution committed to supporting children with
                                    special needs through inclusive education, therapy, and life skills development. We
                                    focus on empowering every child to reach their full potential in a compassionate and
                                    structured environment.
                                </p>

                                <ul class="sn-list-style">
                                    <li>Multidisciplinary support combining education, therapy, and care.</li>
                                    <li>Individualized learning plans tailored to each child's needs.</li>
                                    <li>A safe, sensory-friendly, and inclusive environment.</li>
                                    <li>Strong collaboration with families and professional caregivers.</li>
                                </ul>
                                <span class="sn-about-time about-time d-block">
                                    <span class="scndry-clr">EVERY WEEK:</span>

                                    Sunday To Thursday: 9:00am to 2:00pm </span>
                            </div>
                        </div>
                    </div>
                </div><!-- About Wrap 3 -->
            </div>
        </div>
    </section>
    {{-- End:: About Us Section --}}

    {{-- Start:: Contact Information Section --}}
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
    {{-- End:: Contact Information Section --}}

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

@endsection
@section('website_script')
@endsection
