@extends('frontend.layouts.partials.app')

@section('title', 'Home')
@section('website_css')
@endsection
@section('website_content')
    <!-- Start:: Main Slider -->
    <section class="">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-891066d"
                data-id="891066d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a91e019 elementor-widget elementor-widget-main_slider_4"
                        data-id="a91e019" data-element_type="widget" data-widget_type="main_slider_4.default">
                        <div class="elementor-widget-container">

                            <section class="hero-section"
                                style="background-image:url({{ asset('/frontend/assets/uploads/2023/09/behavioral-therapy-1.jpg') }}) ;">
                                <div class="container">
                                    <div class="slider-hero swiper">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="hero-text">
                                                            <span>Every child is unique, every journey
                                                                matters.</span>
                                                            <h1>Empowering Children with Special Needs</h1>
                                                            <p>
                                                                At Proyash Jashore, we nurture differently-abled
                                                                children through inclusive
                                                                education, therapy, and care. Together, we build
                                                                confident futures.
                                                            </p>
                                                            <a href="{{ route('website.about') }}"
                                                                class="btn">DiscoverProyash</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="hero-img">
                                                            <figure>
                                                                <img decoding="async"
                                                                    src="{{ asset('/frontend/assets/uploads/slider/s1.png') }}"
                                                                    alt="hero-img">
                                                                <div class="swiper-lazy-preloader"></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="hero-text">
                                                            <span>Where care meets progress</span>
                                                            <h1>Building Strength Through Therapy</h1>
                                                            <p>
                                                                Our speech, occupational, and behavioral
                                                                therapies are designed to support the
                                                                growth and communication of autistic and special
                                                                children.
                                                            </p>
                                                            <a href="{{ route('website.about') }}"
                                                                class="btn">DiscoverProyash</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="hero-img">
                                                            <figure>
                                                                <img decoding="async"
                                                                    src="{{ asset('/frontend/assets/uploads/slider/s2.png') }}"
                                                                    alt="hero-img">
                                                                <div class="swiper-lazy-preloader"></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="hero-text">
                                                            <span>We teach with heart and purpose</span>
                                                            <h1>Inclusive Learning for Every Mind</h1>
                                                            <p>
                                                                With a dedicated team of educators and support
                                                                staff, we ensure learning is
                                                                accessible, enjoyable, and effective for every
                                                                child.
                                                            </p>
                                                            <a href="{{ route('website.about') }}"
                                                                class="btn">DiscoverProyash</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="hero-img">
                                                            <figure>
                                                                <img decoding="async"
                                                                    src="{{ asset('/frontend/assets/uploads/slider/s3.png') }}"
                                                                    alt="hero-img">
                                                                <div class="swiper-lazy-preloader"></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Pagination -->
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </section>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const swiper = new Swiper(".slider-hero", {

                                        loop: true, // Enables infinite loop
                                        pagination: {
                                            el: '.swiper-pagination',
                                            clickable: true, // Enables clickable pagination dots
                                        },

                                        navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                        },

                                        autoplay: {
                                            delay: 5000, // Adjust autoplay delay as needed
                                            disableOnInteraction: false,
                                        },

                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Main Slider -->

    <!-- Start:: Important News Section -->
    <section class="important-news-section bg-warning py-2">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center">
                <strong class="me-3 text-dark" style="min-width: 150px">
                    <i class="fas fa-bullhorn"></i> &nbsp;Announcement:
                </strong>
                <marquee behavior="scroll" direction="left" scrollamount="6" onmouseover="this.stop();"
                    onmouseout="this.start();" class="text-dark">
                    Admission is now open for the 2025 academic session &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    New hydrotherapy unit inauguration next week &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    Proyash Jashore awarded for Inclusive Education Excellence
                </marquee>
            </div>
        </div>
    </section>
    <!-- End:: Important News Section -->

    <!-- Start:: Our Team Section -->
    <section class="mt-5">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c3dc7c"
                data-id="2c3dc7c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bcd28ab elementor-widget elementor-widget-video_cta_2"
                        data-id="bcd28ab" data-element_type="widget" data-widget_type="video_cta_2.default">
                        <div class="elementor-widget-container">

                            <section class="video-cta2">
                                <div class="container">
                                    <div class="heading">
                                        <img style="width: 50px;" src="{{ asset('/frontend/assets/images/v-6.png') }}"
                                            alt="img">
                                        <span>Strength Behind Our Mission</span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-5 white-layer opc95 position-relative">
            <div class="container">
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        <div class="col-md-5 col-sm-6 col-lg-4">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/mgt/patron.jpg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Sarahnaz Kamolika Zaman</a></h3>
                                    <span class="d-block thm-clr">Patron,
                                        PROYASH Institute Of Special Education</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c3dc7c"
                data-id="2c3dc7c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bcd28ab elementor-widget elementor-widget-video_cta_2"
                        data-id="bcd28ab" data-element_type="widget" data-widget_type="video_cta_2.default">
                        <div class="elementor-widget-container">

                            <section class="video-cta2">
                                <div class="container">
                                    <div class="heading">
                                        <h2>Board of Management</h2>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-3 white-layer opc95 position-relative">
            <div class="container">
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        <div class="col-md-5 col-sm-6 col-lg-4">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/mgt/Maj_Gen_J_M_Emdadul_Islam.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Maj Gen J M Emdadul Islam, ndc, afwc, psc, M Phil</a></h3>
                                    <span class="d-block thm-clr">General Officer Commanding and Area Comd, Jashore
                                        Area</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-6 col-lg-4">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/mgt/Mrs_Shamali_Haider_Emdad.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Mrs Shamali Haider Emdad
                                        </a></h3><span class="d-block thm-clr">
                                        Assistant Patron, Proyash Jashore
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mrg30 justify-content-center">

                        <div class="col-md-5 col-sm-6 col-lg-4">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/mgt/Brig_Gen_Ahmed_Tanvir_Mazher_Siddiqui.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Brig Gen Ahmed Tanvir Mazher Siddiqui, ndc, psc
                                        </a></h3><span class="d-block thm-clr">Chairman, Proyash Jashore</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-6 col-lg-4">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/mgt/Farhana_Moslehuddin.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Farhana Moslehuddin
                                        </a></h3><span class="d-block thm-clr">Co-Chairperson</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Our Team Section -->

    <!-- Start:: Principal's Message Section -->
    <section>
        <div class="w-100 pt-100 pb-55 position-relative">
            <div class="container">
                <div class="page-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-8 col-sm-8 col-lg-4">
                            <div class="team-detail-img position-relative w-100">
                                <img fetchpriority="high" width="370" height="400"
                                    src="{{ asset('/frontend/assets/images/staff/principle.jpeg') }}"
                                    class="img-fluid brd-rd5 w-100 wp-post-image" alt="" decoding="async" />
                                <div class="team-detail-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">Lt Col Hasan Shahriar Kabir, psc, Arty</h3>
                                    <span class="d-block position-relative thm-clr">Principal, Proyash, Jashore
                                        Area</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-8">
                            <div class="team-detail-wrap w-100">
                                <h3 class="mb-0 mt-0">Principal's Message</h3>
                                <p>
                                    Welcome to Proyash, Jashore Area – a center of care, hope, and inclusive
                                    excellence. <br> <br>

                                    At Proyash, we believe that every child is unique, full of potential, and
                                    worthy of dignity,
                                    respect, and opportunity. Our institution is dedicated to nurturing the
                                    cognitive, emotional,
                                    physical, and social development of children with special needs, including
                                    those on the autism
                                    spectrum. <br> <br>

                                    We understand the extraordinary journey that these children and their
                                    families undertake every
                                    day. That’s why Proyash is not just a school – it is a community built on
                                    compassion, innovation,
                                    and unwavering commitment. With a multidisciplinary team of dedicated
                                    educators, therapists, and
                                    caregivers, we strive to create an environment where students feel safe,
                                    valued, and inspired to
                                    grow. <br> <br>

                                    Our approach combines specialized education, therapy services, and life
                                    skills training to equip
                                    our students with the tools they need to thrive in society. We emphasize
                                    individualized learning
                                    plans, family involvement, and integrated support to ensure that each child
                                    receives the best
                                    possible care tailored to their needs. <br> <br>

                                    As the Principal of this institution, I am proud to lead a mission that is
                                    deeply rooted in
                                    empathy, professionalism, and purposeful education. I am grateful to the
                                    Bangladesh Army, 55
                                    Infantry Division and Jessore Area, our partner organizations, and above
                                    all, the families who
                                    entrust us with their precious children. <br> <br>

                                    Together, let us continue to build a more inclusive and compassionate
                                    society – where every
                                    ability is recognized, every voice is heard, and every child gets the chance
                                    to shine. <br> <br>

                                    Warm regards, <br>
                                    Lt Col Hasan Shahriar Kabir, psc <br>
                                    Principal <br>
                                    Proyash, Jashore Area <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- Page Wrap -->
            </div>
        </div>
    </section>
    <!-- End:: Principal's Message Section -->

    <!-- Start:: Our Services Section -->
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-cfdfc95 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d7aa81c"
                data-id="d7aa81c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-35cd425 elementor-widget elementor-widget-services_slider"
                        data-id="35cd425" data-element_type="widget" data-widget_type="services_slider.default">
                        <div class="elementor-widget-container">

                            <section class="gap section-childcare pt-5 pb-5">
                                <div class="container">

                                    <div class="heading">
                                        <img style="width: 50px;" src="{{ asset('/frontend/assets/images/v-6.png') }}"
                                            alt="img">
                                        <span>NEEDS
                                            TO HELP THEM LEARN</span>
                                        <h2>Our Services</h2>
                                        <div style="text-align: right">
                                            <a href="{{ route('website.services') }}"
                                                style="background: #ffa500b8;
                                                    padding: 5px 20px;
                                                    border-radius: 8px;
                                                    color: white;
                                                    font-weight: bold;">
                                                View All
                                            </a>
                                        </div>
                                    </div>

                                    <div class="therapy-slider owl-carousel">

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser1.webp') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/aba-therapy/index.html">Medical
                                                            Assessment & Care</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Comprehensive Health Evaluation</li>
                                                        <li>Individual Care Planning</li>
                                                        <li>Multidisciplinary Support</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser2.jpg') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/aba-therapy/index.html">Neurological
                                                            Assessment</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Brain & Nerve Function Testing </li>
                                                        <li>Diagnosis of Neurodevelopmental Disorders</li>
                                                        <!-- <li>Guidance for Therapy & Treatment</li> -->

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser3.jpg') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/staff-training/index.html">Audiology
                                                            Assessment</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Hearing Evaluation</li>
                                                        <li>Early Detection of Hearing Issues</li>
                                                        <li>Recommendations for Intervention</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser4.png') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/psychotherapy/index.html">Psychology
                                                            Service & Management</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Behavioral & Emotional Assessment</li>
                                                        <li>Mental Health Support</li>
                                                        <li>Therapy & Counseling Plans</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser5.png') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/psychotherapy/index.html">Diet
                                                            Management</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Nutritional Assessment</li>
                                                        <li>Personalized Diet Plans</li>
                                                        <li>Health Condition Support</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser6.jpg') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/psychotherapy/index.html">Speech &
                                                            Language Therapy</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Speech & Communication Improvement</li>
                                                        <li>Language Development Support</li>
                                                        <li>Therapy for Speech Disorders</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser7.webp') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/psychotherapy/index.html">Occupational
                                                            & Sensory Therapy</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Daily Living Skill Development</li>
                                                        <li>Sensory Integration Support</li>
                                                        <li>Behavioral and Motor Improvement</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser8.png') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/psychotherapy/index.html">Physiotherapy</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Improves Physical Mobility</li>
                                                        <li>Supports Motor Skill Development</li>
                                                        <li>Rehabilitation for Physical Conditions</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="childcare">
                                                <div class="childcare-img">
                                                    <figure>
                                                        <img decoding="async"
                                                            src="{{ asset('/frontend/assets/uploads/service/ser9.webp') }}"
                                                            alt="img">
                                                    </figure>
                                                    <!-- <span>Suitable For 2-14 Years</span> -->
                                                </div>
                                                <div class="childcare-text">
                                                    <h4><a href="services/psychotherapy/index.html">Hydrotherapy</a>
                                                    </h4>
                                                    <ul>
                                                        <li>Water-Based Therapy</li>
                                                        <li>Supports Motor & Joint Function</li>
                                                        <li>Beneficial for Special Needs</li>

                                                    </ul>
                                                    <a href="{{ route('website.contact') }}"><i
                                                            class="flati-phone"></i>Book a
                                                        Call</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <img decoding="async"
                                    src="{{ asset('/frontend/assets/plugins/ingeniofy/assets/images/extra-image-1.png') }}"
                                    alt="img" class="extra-image-1"> <img decoding="async"
                                    src="{{ asset('/frontend/assets/plugins/ingeniofy/assets/images/extra-image-2.png') }}"
                                    alt="img" class="extra-image-2">
                                <img decoding="async"
                                    src="{{ asset('/frontend/assets/plugins/ingeniofy/assets/images/extra-image-2.png') }}"
                                    alt="img" class="extra-image-3">
                            </section>

                            <script>
                                /***--------  therapy-slider   ------- ***/
                                var isRTL = jQuery('html').attr('dir') === 'rtl';
                                jQuery(window).on("load", function($) {
                                    jQuery(".therapy-slider").owlCarousel({
                                        rtl: isRTL,
                                        loop: true,
                                        dot: true,
                                        nav: false,
                                        margin: 26,
                                        autoplay: true,
                                        autoplayTimeout: 3000,
                                        responsive: {
                                            0: {
                                                items: 1,
                                            },
                                            766: {
                                                items: 2,
                                            },
                                            992: {
                                                items: 3,
                                            },
                                            1200: {
                                                items: 4,
                                            },
                                        },
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Our Services Section -->

    <!-- Start:: Our Mission and Vision Section -->
    <section class="pt-5">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c3dc7c"
                data-id="2c3dc7c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bcd28ab elementor-widget elementor-widget-video_cta_2"
                        data-id="bcd28ab" data-element_type="widget" data-widget_type="video_cta_2.default">
                        <div class="elementor-widget-container">

                            <section class="video-cta2">
                                <div class="container">
                                    <div class="heading">
                                        <img style="width: 50px;" src="{{ asset('/frontend/assets/images/v-6.png') }}"
                                            alt="img">
                                        <span>Inspiring Every Child</span>
                                        <h2>What We Believe In</h2>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-3a0492f elementor-section-boxed elementor-section-height-default elementor-section-height-default">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62d0354"
                data-id="62d0354" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-643d827 elementor-widget elementor-widget-mission_statement"
                        data-id="643d827" data-element_type="widget" data-widget_type="mission_statement.default">
                        <div class="elementor-widget-container">

                            <section class="mission">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="our-mission">
                                                <h3>Our Mission </h3>
                                                <p>To nurture the potential of every child with special needs
                                                    through inclusive education,
                                                    multidisciplinary therapeutic support, and community
                                                    engagement – empowering them to lead
                                                    lives of dignity, independence, and meaningful contribution
                                                    to society.</p>

                                                <br> <br>
                                                <h4 class="mb-0 mt-0">We are committed to:</h4>
                                                <ul class="list">
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">Providing individualized,
                                                        holistic education tailored to the unique abilities of
                                                        each student.</li>
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">
                                                        Creating a safe, supportive, and sensory-friendly
                                                        learning environment.
                                                    </li>
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">
                                                        Collaborating with families and professionals for
                                                        comprehensive care and support.
                                                    </li>
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">
                                                        Fostering values of empathy, patience, and social
                                                        integration.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-147f562"
                data-id="147f562" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-da17f35 elementor-widget elementor-widget-value_accordion"
                        data-id="da17f35" data-element_type="widget" data-widget_type="value_accordion.default">
                        <div class="elementor-widget-container">
                            <section class="value_accordion">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="our-mission">
                                                <h3>Vision </h3>

                                                <p>To become a center of excellence in Bangladesh for the
                                                    education, care, and empowerment
                                                    of children with special needs and autism – leading the way
                                                    toward an inclusive society
                                                    where every child can thrive and be celebrated for who they
                                                    are.</p>
                                                <br> <br>
                                                <h4 class="mb-0 mt-0">We envision:</h4>
                                                <ul class="list">
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">
                                                        A future where disability is not a limitation but a
                                                        different way of being.
                                                    </li>
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">
                                                        A society where individuals with special needs are
                                                        included, respected, and empowered.
                                                    </li>
                                                    <li><img decoding="async"
                                                            src="{{ asset('/frontend/assets/img/check.png') }}"
                                                            alt="img">
                                                        An institution that continually innovates in special
                                                        education and therapy practices.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Our Mission and Vision Section -->

    <!-- Start:: Events Section -->
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-46d846b elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
        data-id="46d846b" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b6e82f9"
                data-id="b6e82f9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a19442a elementor-widget elementor-widget-Events_Grid"
                        data-id="a19442a" data-element_type="widget" data-widget_type="Events_Grid.default">
                        <div class="elementor-widget-container">

                            <section class="gap event_grid mt-0 pt-0">
                                <div class="container">
                                    <div class="heading">
                                        <img style="width: 50px;" src="{{ asset('/frontend/assets/images/v-6.png') }}"
                                            alt="img">
                                        <span>
                                            Activities to engage, educate & celebrate
                                        </span>
                                        <h2>Inclusive Gatherings</h2>
                                        <div style="text-align: right">
                                            <a href="{{ route('website.all_events') }}"
                                                style="background: #ffa500b8;
                                                    padding: 5px 20px;
                                                    border-radius: 8px;
                                                    color: white;
                                                    font-weight: bold;">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="events">
                                                <div class="events-img">
                                                    <figure>
                                                        <img decoding="async" alt="events-img"
                                                            src="{{ asset('/frontend/assets/uploads/event/e1.png') }}">
                                                    </figure> <span><i class="flati-gps"></i>Proyash, Jessore
                                                        Area</span>
                                                </div>
                                                <div class="events-text">
                                                    <h4>
                                                        <span>NOV</span> 13
                                                    </h4>
                                                    <div>
                                                        <span>10:30 am - 01:30 am</span>
                                                        <h5><a href="#">
                                                                Fun Day with Parents
                                                            </a> </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="events">
                                                <div class="events-img">
                                                    <figure>
                                                        <img decoding="async" alt="events-img"
                                                            src="{{ asset('/frontend/assets/uploads/event/e2.png') }}">
                                                    </figure> <span><i class="flati-gps"></i>Proyash Therapy
                                                        Room</span>
                                                </div>
                                                <div class="events-text">
                                                    <h4>
                                                        <span>DEC</span> 17
                                                    </h4>
                                                    <div>
                                                        <span>10:45 am - 11:30 am</span>
                                                        <h5><a href="#"> Therapy Awareness Session</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="events">
                                                <div class="events-img">
                                                    <figure>
                                                        <img decoding="async" alt="events-img"
                                                            src="{{ asset('/frontend/assets/uploads/event/e3.png') }}">
                                                    </figure> <span><i class="flati-gps"></i>Jessore Central
                                                        Park</span>
                                                </div>
                                                <div class="events-text">
                                                    <h4>
                                                        <span>DEC</span> 23
                                                    </h4>
                                                    <div>
                                                        <span>10:00 am - 11:30 am</span>
                                                        <h5><a href="#"> Winter Art & Walk</a> </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Events Section -->

    <!-- Start:: Contact Section -->
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-5175d16 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
        data-id="5175d16" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c3fa15"
                data-id="2c3fa15" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-24ab4cb elementor-widget elementor-widget-consult_doctors"
                        data-id="24ab4cb" data-element_type="widget" data-widget_type="consult_doctors.default">
                        <div class="elementor-widget-container">

                            <section class="gap friendly-staff"
                                style="background-image: url({{ asset('/frontend/assets/uploads/2024/06/specialist.jpg') }});">
                                <div class="container">
                                    <div class="row align-items-center">


                                        <div class="col-lg-6">
                                            <div class="heading two">
                                                <span>IMPORTANCE OF A FRIENDLY STAFF</span>
                                                <h2>Administrative Contacts</h2>
                                            </div>

                                            <div class="doctors-info">

                                                <img decoding="async"
                                                    src="{{ asset('/frontend/assets/uploads/staff/Mina_Sultana.jpg') }}"
                                                    alt="img">
                                                <div>
                                                    <a href="#">Mina Sultana (Sr. Teacher)</a>

                                                    <p>Vice Principal</p>
                                                    <!-- <h4>Phone No: <a href="tel:230-235-5020">230-235-5020</a> </h4> -->
                                                </div>
                                            </div>

                                            <div class="doctors-info">

                                                <img decoding="async"
                                                    src="{{ asset('/frontend/assets/uploads/staff/Sayla_Sarmin.jpg') }}"
                                                    alt="img">
                                                <div>
                                                    <a href="#">Sayla Sarmin (Sr. Teacher)</a>
                                                    <p>Information & Research Officer</p>
                                                </div>
                                            </div>

                                            <a href="{{ route('website.faculties') }}#specialistsList"
                                                class="all-doctors">View All
                                                Faculties</a>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="request-quote">
                                                <h5>REQUEST A QUOTE</h5>
                                                <h3>Start Consulting</h3>
                                                <p>
                                                <div class="wpcf7 no-js" id="wpcf7-f6908-p6772-o1" lang="en-US"
                                                    dir="ltr" data-wpcf7-id="6908">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form>
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="6908" />
                                                            <input type="hidden" name="_wpcf7_version" value="6.0.6" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag"
                                                                value="wpcf7-f6908-p6772-o1" />
                                                            <input type="hidden" name="_wpcf7_container_post"
                                                                value="6772" />
                                                            <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                value="" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                        data-name="text-334"><input size="40"
                                                                            maxlength="400"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Name" value=""
                                                                            type="text" name="text-334" /></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                        data-name="text-338"><input size="40"
                                                                            maxlength="400"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Age" value=""
                                                                            type="text" name="text-338" /></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                        data-name="email-476"><input size="40"
                                                                            maxlength="400"
                                                                            class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email"
                                                                            aria-invalid="false" placeholder="E-mail"
                                                                            value="" type="email"
                                                                            name="email-476" /></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                        data-name="text-378"><input size="40"
                                                                            maxlength="400"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Phone" value=""
                                                                            type="text" name="text-378" /></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <p><span class="wpcf7-form-control-wrap"
                                                                        data-name="menu-481"><select
                                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required nice-select Advice"
                                                                            aria-required="true" aria-invalid="false"
                                                                            name="menu-481">
                                                                            <option value="Free Consultation">
                                                                                Free Consultation</option>
                                                                            <option
                                                                                value="Appointment Slot 3:00 PM - 3:30 PM">
                                                                                Appointment Slot 3:00 PM -
                                                                                3:30 PM</option>
                                                                            <option
                                                                                value="Appointment Slot 4:00 PM - 4:30 PM">
                                                                                Appointment Slot 4:00 PM -
                                                                                4:30 PM</option>
                                                                            <option
                                                                                value="Appointment Slot 5:00 PM - 5:30 PM">
                                                                                Appointment Slot 5:00 PM -
                                                                                5:30 PM</option>
                                                                            <option
                                                                                value="Appointment Slot 6:00 PM - 6:30 PM">
                                                                                Appointment Slot 6:00 PM -
                                                                                6:30 PM</option>
                                                                        </select></span><br />
                                                                    <span class="wpcf7-form-control-wrap"
                                                                        data-name="textarea-891">
                                                                        <textarea cols="40" rows="10" maxlength="2000"
                                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                                                                            name="textarea-891">About Mental Condition</textarea>
                                                                    </span><br />
                                                                    <input
                                                                        class="wpcf7-form-control wpcf7-submit has-spinner btn"
                                                                        type="submit" value="Submit Now" />
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Contact Section -->

    <!-- Start:: News & Articles Section -->
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-80e1db1 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
        data-id="80e1db1" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bb3dce1"
                data-id="bb3dce1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-4b258ae elementor-widget elementor-widget-blog_grid"
                        data-id="4b258ae" data-element_type="widget" data-widget_type="blog_grid.default">
                        <div class="elementor-widget-container">


                            <section class="gap n_and_a pt-5 pb-5">
                                <div class="container">
                                    <div class="heading">
                                        <img style="width: 50px;" src="{{ asset('/frontend/assets/images/v-6.png') }}"
                                            alt="img">
                                        <span>Best Therapy Tips</span>
                                        <h2>News & Articles!</h2>
                                        <div style="text-align: right">
                                            <a href="{{ route('website.news_articles') }}"
                                                style="background: #ffa500b8;
                                                    padding: 5px 20px;
                                                    border-radius: 8px;
                                                    color: white;
                                                    font-weight: bold;">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="blog-style">
                                                <figure>
                                                    <img decoding="async"
                                                        src="{{ asset('/frontend/assets/uploads/news/n1.jpg') }}"
                                                        alt="img">
                                                </figure>
                                                <a href="">
                                                    <h6>May 24, 2025</h6>
                                                </a>
                                                <div class="blog-style-text">
                                                    <a href="">
                                                        <h3>Proyash Jessore Achieves National Recognition</h3>
                                                    </a>
                                                    <p>
                                                        Proyash Jessore has recently received national
                                                        recognition for its outstanding
                                                        contributions in inclusive education and therapy
                                                        services for children with special
                                                        needs.
                                                    </p>
                                                    <div class="d-flex align-items-center">
                                                        {{-- <h4>By <a href="author/admin/index.html">Dr. Abc</a>
                                                        </h4> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="blog-style">
                                                <figure>
                                                    <img decoding="async"
                                                        src="{{ asset('/frontend/assets/uploads/news/n2.png') }}"
                                                        alt="img">
                                                </figure>
                                                <a href="">
                                                    <h6>April 28, 2025</h6>
                                                </a>
                                                <div class="blog-style-text">
                                                    <a href="">
                                                        <h3>Inclusive Education Workshop Held at Proyash Jessore
                                                        </h3>
                                                    </a>
                                                    <p>
                                                        An inclusive education workshop was organized to train
                                                        teachers and caregivers on modern
                                                        teaching strategies for children with diverse abilities.
                                                    </p>
                                                    <div class="d-flex align-items-center">
                                                        {{-- <h4>By <a href="">Dr. Abc</a></h4> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="blog-style">
                                                <figure>
                                                    <img decoding="async"
                                                        src="{{ asset('/frontend/assets/uploads/news/n3.png') }}"
                                                        alt="img">
                                                </figure>
                                                <a href="#">
                                                    <h6>April 2, 2025</h6>
                                                </a>
                                                <div class="blog-style-text">
                                                    <a href="#">
                                                        <h3>Awareness Campaign on World Autism Day</h3>
                                                    </a>
                                                    <p>
                                                        To mark World Autism Awareness Day, Proyash Jessore
                                                        arranged a colorful rally and
                                                        seminar to raise public awareness about autism spectrum
                                                        disorder.
                                                    </p>
                                                    <div class="d-flex align-items-center">
                                                        {{-- <h4>By <a href="#">Dr. Abc</a></h4> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center">
                                        <a href="{{ route('website.news_articles') }}" class="btn">View All News</a>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: News & Articles Section -->
@endsection
@section('website_script')
@endsection
