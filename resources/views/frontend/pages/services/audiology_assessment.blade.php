@extends('frontend.layouts.partials.app')

@section('title', 'Audiology Assessment')
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
                        <h1 class="mb-0 text-white">Audiology Assessment</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item text-white">
                                <a href="{{ route('website.services') }}" style="color: white">Services</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Audiology Assessment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}




    <section>
        <div class="w-100 pt-90 pb-90 position-relative">
            <div class="container">
                <div class="page-wrap position-relative w-100">
                    <div class="row mrg30">

                        <div class="col-md-12 col-sm-12 col-lg-8">
                            <div class="post-detail w-100">
                                <div class="post-feat-img serv-detail-img brd-rd10 position-relative overflow-hidden w-100">

                                    <img style="width: 100%; height: auto;"
                                        src="{{ asset('/frontend/assets/uploads/service/audiology_assessment.png') }}" />
                                    <span class="serv-post-authr position-absolute">
                                        {{-- <i class="fas fa-user thm-clr"></i> --}}
                                        Audiology Assessment
                                    </span>
                                </div>

                                <div
                                    class="post-detail-meta-wrap d-flex flex-wrap position-relative justify-content-between align-items-center w-100">
                                    {{-- <span class="brd-rd5 bg-color11 serv-post-date">January 29, 2024</span> --}}

                                    <div class="social-links5 d-inline-flex flex-wrap align-items-center">
                                        <a class="rounded-circle facebook-hvr" href="" title="Facebook"
                                            data-toggle="tooltip" data-placement="top" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a class="rounded-circle twitter-hvr" href="" title="Twitter"
                                            data-toggle="tooltip" data-placement="top" target="_blank">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a class="rounded-circle youtube-hvr" href="" title="Youtube"
                                            target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                        <a class="rounded-circle linkedin-hvr" href="" title="Linkedin"
                                            data-toggle="tooltip" data-placement="top" itemprop="url" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a class="rounded-circle rss-hvr" href="" title="RSS" target="_blank">
                                            <i class="fas fa-rss"></i>
                                        </a>
                                    </div>
                                </div>

                                <p>
                                    At Proyash, our Audiology Assessment service focuses on identifying and addressing
                                    hearing-related challenges that may impact a child's speech, language development,
                                    learning, and social interaction. Early detection of hearing issues is essential to
                                    ensure children reach their full communicative potential. <br> <br>

                                    Our trained audiologists perform comprehensive hearing evaluations using child-friendly
                                    and non-invasive techniques. These assessments help detect conditions such as hearing
                                    loss, auditory processing disorders, or ear infections that may interfere with a child’s
                                    ability to listen, speak, and learn effectively.<br> <br>

                                    The evaluation process includes pure tone audiometry, tympanometry, speech recognition
                                    tests, and observation-based hearing checks — all conducted in a calm and supportive
                                    environment. We also involve parents throughout the process to ensure they clearly
                                    understand the results and the next steps if intervention is needed.<br> <br>

                                    With timely diagnosis and personalized recommendations, our goal is to ensure that every
                                    child with hearing difficulties receives the care, technology, and support they need to
                                    thrive academically and socially.


                                </p>
                                <blockquote>
                                    <p>
                                        <i class="flaticon-quote d-block"></i>
                                        Listen Better. Learn Better. Live Better.
                                    </p>
                                </blockquote>
                                <h3 class="mb-0">Quality Care From Quality Experts:</h3>
                                <p>
                                    At Proyash, our Audiology services are delivered by certified audiologists with
                                    specialized training in pediatric hearing assessment and management. We understand that
                                    hearing is the foundation of language, learning, and social development — which is why
                                    we approach each assessment with precision, patience, and compassion. <br> <br>

                                    Using modern audiological tools and age-appropriate techniques, our experts ensure
                                    accurate diagnosis in a safe, child-friendly environment. Every child is treated with
                                    care and dignity, and parents are guided through the process with clarity and
                                    support.<br> <br>

                                    Our goal is to identify hearing challenges early and provide the right solutions — from
                                    medical referrals to hearing aid guidance — ensuring every child has the opportunity to
                                    grow, learn, and communicate with confidence.
                                </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Treatments:</h3>
                                        <ul>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Pure tone audiometry for hearing sensitivity
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Speech discrimination and clarity tests
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Tympanometry and middle ear function analysis
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Otoacoustic Emissions (OAE) screening
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Auditory Processing Disorder evaluations
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Assessment for conductive and sensorineural hearing loss
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Behavioral observation audiometry for young children
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Referral for medical or ENT intervention
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Recommendations for hearing aids or assistive devices
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Parental guidance and follow-up planning
                                            </li>
                                        </ul>



                                    </div>
                                    <div class="col-md-4">
                                        <img style="width: 100%; height: auto; border-radius: 8px;"
                                            src="{{ asset('/frontend/assets/uploads/service/audiology_assessment2.png') }}" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-8 col-lg-4">
                            <aside class="sidebar w-100">
                                {{-- Start:: Others Service --}}
                                <div class="widget-box v3 brd-rd10 bg-color6 overflow-hidden w-100 widget style2">
                                    <h4 class="position-relative tit-shp thm-shp widget-title3">Others Services</h4>
                                    <ul class="cate-list mb-0 list-unstyled w-100">
                                        <li class="cat-item">
                                            <a href="{{ route('website.medical_assessment_care') }}">
                                                Medical Assessment & Care
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.neurological_assessment') }}">
                                                Neurological Assessment
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.audiology_assessment') }}">
                                                Audiology Assessment
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.psychology_service_management') }}">
                                                Psychology Service & Management
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.diet_management') }}">
                                                Diet Management
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.counselling') }}">
                                                Counselling
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.speech_language_therapy') }}">
                                                Speech & Language Therapy
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.occupational_sensory_therapy') }}">
                                                Occupational & Sensory Therapy
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.physiotherapy') }}">
                                                Physiotherapy
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.hydrotherapy') }}">
                                                Hydrotherapy
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.prosthetic_orthotic_center') }}">
                                                Prosthetic & Orthotic Center
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.music_therapy_yoga') }}">
                                                Music Therapy & Yoga
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.hyperbaric_oxygen_chamber') }}">
                                                Hyperbaric Oxygen Chamber
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.physiotherapy') }}">
                                                Outdoor Physiotherapy
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.occupational_sensory_therapy') }}">
                                                Occupational Therapy
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.speech_language_therapy') }}">
                                                Speech & Language Therapy service
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.swimming') }}">
                                                Swimming
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.art_craft') }}">
                                                Art & Craft
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="{{ route('website.music_dance') }}">
                                                Music & Dance
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- End:: Others Service --}}

                                {{-- Start:: Our Events --}}
                                <div class="widget-box v3 brd-rd10 bg-color6 overflow-hidden w-100 widget style2">
                                    <h4 class="position-relative tit-shp thm-shp widget-title3">Proyash Events</h4>

                                    <div class="mini-posts-wrap w-100">

                                        {{-- Start:: Single Event --}}
                                        <div class="mini-post-box d-flex flex-wrap w-100">
                                            <a href="#" title="">
                                                <img class="img-fluid w-100"
                                                    src="{{ asset('/frontend/assets/uploads/event/e1.png') }}"
                                                    alt="">
                                            </a>
                                            <div class="mini-post-info">
                                                <span class="d-block thm-clr">Nov 13, 2024</span>
                                                <h4 class="mb-0">
                                                    <a href="#" title="">
                                                        Fun Day with Parents
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                        {{-- End:: Single Event --}}

                                        {{-- Start:: Single Event --}}
                                        <div class="mini-post-box d-flex flex-wrap w-100">
                                            <a href="#" title="">
                                                <img class="img-fluid w-100"
                                                    src="{{ asset('/frontend/assets/uploads/event/e2.png') }}"
                                                    alt="">
                                            </a>
                                            <div class="mini-post-info">
                                                <span class="d-block thm-clr">Dec 17, 2024</span>
                                                <h4 class="mb-0">
                                                    <a href="#" title="">
                                                        Therapy Awareness Session
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                        {{-- End:: Single Event --}}

                                        {{-- Start:: Single Event --}}
                                        <div class="mini-post-box d-flex flex-wrap w-100">
                                            <a href="#" title="">
                                                <img class="img-fluid w-100"
                                                    src="{{ asset('/frontend/assets/uploads/event/e3.png') }}"
                                                    alt="">
                                            </a>
                                            <div class="mini-post-info">
                                                <span class="d-block thm-clr">Dec 23, 2024</span>
                                                <h4 class="mb-0">
                                                    <a href="#" title="">
                                                        Winter Art & Walk
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                        {{-- End:: Single Event --}}

                                    </div>

                                </div>
                                {{-- End:: Our Events --}}

                            </aside>
                        </div>

                    </div>
                </div><!-- Page Wrap -->
            </div>
        </div>
    </section>

@endsection
@section('website_script')
@endsection
