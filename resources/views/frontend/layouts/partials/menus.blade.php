<!-- Start:: header -->
@php
    use App\Models\Website\WebsiteSettings;
    $settings = WebsiteSettings::select('logo', 'title', 'phone', 'email')->first();
@endphp
<header class="style4">
    <!-- Start:: Top Bar -->
    <div class="top-bar">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="d-flex align-items-center pt-2 pb-2">
                        <div class="content-header me-5">
                            <i class="fas fa-phone"></i>
                            <h4>Phone: <a href="callto:{{ $settings->phone ?? '+8801*********' }}">
                                    {{ $settings->phone ?? '+8801*********' }}
                                </a>
                            </h4>
                        </div>
                        <div class="content-header">
                            <i class="fas fa-envelope"></i>
                            <h4>Email:<a href="mailto:{{ $settings->email ?? '' }}">{{ $settings->email ?? '' }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <h3 style="color: white; text-align:right;">{{ $settings->title ?? '' }}</h3>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Top Bar -->

    <div class="container">
        <div class="bottom-bar">
            <!-- Start:: Logo -->
            <div class="two-bar">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="{{ route('website.index') }}" title="">
                            @if ($settings && $settings->logo)
                                <img class="img-fluid" style="height: 100px;" src="{{ asset($settings->logo) }}"
                                    alt="Autism" itemprop="image">
                            @else
                                <img class="img-fluid" style="height: 100px;"
                                    src="{{ asset('/frontend/assets/images/v-6.png') }}" alt="Autism"
                                    itemprop="image">
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <!-- End:: Logo -->

            <!-- Start:: Navigation -->
            <nav class="navbar">
                <ul id="menu-main-menu" class="navbar-links">
                    <li class="">
                        <a href="{{ route('website.index') }}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a>Services</a>
                        <ul class="sub-menu mb-0 list-unstyled">
                            <li class="menu-item-has-children">
                                <a>Specialized Intervention Clinic</a>
                                <ul class="sub-menu mb-0 list-unstyled">
                                    <li>
                                        <a href="{{ route('website.medical_assessment_care') }}">
                                            Medical Assessment & Care
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.neurological_assessment') }}">
                                            Neurological Assessment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.audiology_assessment') }}">
                                            Audiology Assessment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.psychology_service_management') }}">
                                            Psychology Service & Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.diet_management') }}">Diet Management</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a>Therapeutic Support Service</a>
                                <ul class="sub-menu mb-0 list-unstyled">
                                    <li>
                                        <a href="{{ route('website.counselling') }}">Counselling</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.speech_language_therapy') }}">
                                            Speech & Language Therapy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.occupational_sensory_therapy') }}">
                                            Occupational & Sensory Therapy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.physiotherapy') }}">Physiotherapy</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.hydrotherapy') }}">Hydrotherapy</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.prosthetic_orthotic_center') }}">
                                            Prosthetic & Orthotic Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.music_therapy_yoga') }}">Music Therapy & Yoga</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.hyperbaric_oxygen_chamber') }}">
                                            Hyperbaric Oxygen Chamber
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a>Outdoor Service</a>
                                <ul class="sub-menu mb-0 list-unstyled">
                                    <li>
                                        <a href="{{ route('website.physiotherapy') }}">Outdoor Physiotherapy</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.occupational_sensory_therapy') }}">
                                            Occupational Therapy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.speech_language_therapy') }}">
                                            Speech & Language Therapy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.swimming') }}">Swimming</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.art_craft') }}">Art & Craft</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('website.music_dance') }}">Music & Dance</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Afternoon Care (বৈকালিক যত্ন)</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a>News & Events</a>
                        <ul class="sub-menu mb-0 list-unstyled">
                            <li>
                                <a href="{{ route('website.news_articles') }}">News & Articles</a>
                            </li>
                            <li>
                                <a href="{{ route('website.all_events') }}">Proyash Events</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('website.faculties') }}">Faculty</a>
                    </li>
                    <li>
                        <a href="{{ route('website.about') }}">About Us</a>
                    </li>
                    <li><a href="{{ route('website.contact') }}">Contact</a></li>
                </ul>
            </nav>
            <!-- End:: Navigation -->

            <div class="header-search">
                <!-- Search Button -->
                {{-- <div class="header-search-button search-box-outer">
                    <a href="javascript:void(0)" class="search-btn pink-style">
                        <i class="flati-search"></i>
                    </a>
                </div> --}}
                <!-- Appointment Button -->
                <a href="{{ route('website.about') }}" class="btn">Appointment</a>
                <!-- Donate Now Button -->
                <a href="{{ route('website.donate_proyash') }}" class="btn two">Donate Now</a>
            </div>
        </div>
    </div>
    </div>

</header>
<!-- End:: header -->

<!-- Start:: search-popup -->
<div class="search-popup">
    <button class="close-search"><i class="fa-solid fa-xmark"></i></button>
    <form method="get" action="https://autism.nautm.com/">
        <div class="form-group">
            <input name="s" type="text" required="" name="search-field" value=""
                placeholder="Enter Your Keywords..." required="" value=""
                onfocus="if (this.value = '') {this.value = '';}"
                onblur="if (this.value == '') {this.value = 'Enter Your Keywords...';}">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End:: search-popup -->

<!-- Start:: Sticky Menu -->
<div class="sticky-menu">
    <div class="container">
        <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="logo">
                <a href="{{ route('website.index') }}" title="">
                    @if ($settings && $settings->logo)
                        <img class="img-fluid" style="height: 80px;" src="{{ asset($settings->logo) }}"
                            alt="Autism" itemprop="image">
                    @else
                        <img style="height: 80px;" src="{{ asset('/frontend/assets/images/v-6.png') }}"
                            alt="Autism" itemprop="image">
                    @endif
                </a>
            </div><!-- Logo -->
            <nav class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="header-left">
                    <ul id="menu-main-menu-1" class="mb-0 list-unstyled d-inline-flex">
                        <li>
                            <a href="{{ route('website.index') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a>Services</a>
                            <ul class="sub-menu mb-0 list-unstyled">
                                <li class="menu-item-has-children">
                                    <a>Specialized Intervention Clinic</a>
                                    <ul class="sub-menu mb-0 list-unstyled">
                                        <li>
                                            <a href="{{ route('website.medical_assessment_care') }}">
                                                Medical Assessment & Care
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.neurological_assessment') }}">
                                                Neurological Assessment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.audiology_assessment') }}">
                                                Audiology Assessment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.psychology_service_management') }}">
                                                Psychology Service & Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.diet_management') }}">Diet Management</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>Therapeutic Support Service</a>
                                    <ul class="sub-menu mb-0 list-unstyled">
                                        <li>
                                            <a href="{{ route('website.counselling') }}">Counselling</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.speech_language_therapy') }}">
                                                Speech & Language Therapy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.occupational_sensory_therapy') }}">
                                                Occupational & Sensory Therapy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.physiotherapy') }}">Physiotherapy</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.hydrotherapy') }}">Hydrotherapy</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.prosthetic_orthotic_center') }}">
                                                Prosthetic & Orthotic Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.music_therapy_yoga') }}">
                                                Music Therapy & Yoga
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.hyperbaric_oxygen_chamber') }}">
                                                Hyperbaric Oxygen Chamber
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>Outdoor Service</a>
                                    <ul class="sub-menu mb-0 list-unstyled">
                                        <li>
                                            <a href="{{ route('website.physiotherapy') }}">Outdoor Physiotherapy</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.occupational_sensory_therapy') }}">
                                                Occupational Therapy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.speech_language_therapy') }}">
                                                Speech & Language Therapy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.swimming') }}">Swimming</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.art_craft') }}">Art & Craft</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('website.music_dance') }}">Music & Dance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Afternoon Care (বৈকালিক যত্ন)</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a>News & Events</a>
                            <ul class="sub-menu mb-0 list-unstyled">
                                <li>
                                    <a href="{{ route('website.news_articles') }}">News & Articles</a>
                                </li>
                                <li>
                                    <a href="{{ route('website.all_events') }}">Proyash Events</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('website.faculties') }}">Faculty</a>
                        </li>
                        <li><a href="{{ route('website.about') }}">About Us</a></li>
                        <li><a href="{{ route('website.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End:: Sticky Menu -->

<!-- Start:: Responsive Header -->
<div class="rspn-hdr">
    <div class="lg-mn">
        <div class="logo"><a href="{{ route('website.index') }}" title="Home">
                @if ($settings && $settings->logo)
                    <img class="img-fluid" style="height: 80px;" src="{{ asset($settings->logo) }}" alt="Autism"
                        itemprop="image">
                @else
                    <img style="height: 80px;" src="{{ asset('/frontend/assets/images/v-6.png') }}" alt="Autism"
                        itemprop="image">
                @endif
            </a>
        </div>
        <div class="rspn-cnt">
            <span>
                <i class="thm-clr fas fa-envelope"></i> <a
                    href="mailto: admin@proyash.edu.bd">admin@proyash.edu.bd</a>
            </span>
            <span>
                <i class="thm-clr fas fa-phone"></i> +8801769-553729 </span>
        </div>
        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul id="menu-main-menu-2" class="">
            <li>
                <a href="{{ route('website.index') }}">Home</a>
            </li>
            <li class="menu-item-has-children">
                <a>Services</a>
                <ul class="sub-menu mb-0 list-unstyled">
                    <li class="menu-item-has-children">
                        <a>Specialized Intervention Clinic</a>
                        <ul class="sub-menu mb-0 list-unstyled">
                            <li>
                                <a href="{{ route('website.medical_assessment_care') }}">
                                    Medical Assessment & Care
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.neurological_assessment') }}">
                                    Neurological Assessment
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.audiology_assessment') }}">
                                    Audiology Assessment
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.psychology_service_management') }}">
                                    Psychology Service & Management
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.diet_management') }}">
                                    Diet Management
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a>Therapeutic Support Service</a>
                        <ul class="sub-menu mb-0 list-unstyled">
                            <li>
                                <a href="{{ route('website.counselling') }}">Counselling</a>
                            </li>
                            <li>
                                <a href="{{ route('website.speech_language_therapy') }}">
                                    Speech & Language Therapy
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.occupational_sensory_therapy') }}">
                                    Occupational & Sensory Therapy
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.physiotherapy') }}">Physiotherapy</a>
                            </li>
                            <li>
                                <a href="{{ route('website.hydrotherapy') }}">Hydrotherapy</a>
                            </li>
                            <li>
                                <a href="{{ route('website.prosthetic_orthotic_center') }}">
                                    Prosthetic & Orthotic Center
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.music_therapy_yoga') }}">
                                    Music Therapy & Yoga
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.hyperbaric_oxygen_chamber') }}">
                                    Hyperbaric Oxygen Chamber
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a>Outdoor Service</a>
                        <ul class="sub-menu mb-0 list-unstyled">
                            <li>
                                <a href="{{ route('website.physiotherapy') }}">Outdoor Physiotherapy</a>
                            </li>
                            <li>
                                <a href="{{ route('website.occupational_sensory_therapy') }}">
                                    Occupational Therapy
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.speech_language_therapy') }}">
                                    Speech & Language Therapy
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('website.swimming') }}">Swimming</a>
                            </li>
                            <li>
                                <a href="{{ route('website.art_craft') }}">Art & Craft</a>
                            </li>
                            <li>
                                <a href="{{ route('website.music_dance') }}">Music & Dance</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Afternoon Care (বৈকালিক যত্ন)</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a>News & Events</a>
                <ul class="sub-menu mb-0 list-unstyled">
                    <li>
                        <a href="{{ route('website.news_articles') }}">News & Articles</a>
                    </li>
                    <li>
                        <a href="{{ route('website.all_events') }}">Proyash Events</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('website.faculties') }}">Faculty</a>
            </li>
            <li><a href="{{ route('website.about') }}">About Us</a></li>
            <li><a href="{{ route('website.contact') }}">Contact</a></li>
        </ul>
    </div><!-- Responsive Menu -->
</div>
<!-- End:: Responsive Header -->
