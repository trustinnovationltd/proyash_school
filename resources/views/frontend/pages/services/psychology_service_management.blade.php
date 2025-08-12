@extends('frontend.layouts.partials.app')

@section('title', 'Psychology Service & Management')
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
                        <h1 class="mb-0 text-white">Psychology Service & Management</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item text-white">
                                <a href="{{ route('website.services') }}" style="color: white">Services</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Psychology Service & Management</li>
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
                                        src="{{ asset('/frontend/assets/uploads/service/psychology_service_management.png') }}" />
                                    <span class="serv-post-authr position-absolute">
                                        {{-- <i class="fas fa-user thm-clr"></i> --}}
                                        Psychology Service & Management
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
                                    At Proyash, our Psychology Service & Management unit plays a vital role in supporting
                                    the emotional, behavioral, and cognitive development of children with special needs. We
                                    focus on identifying psychological challenges early and providing tailored interventions
                                    that help children understand themselves better, manage emotions, and function
                                    effectively in their environment. <br> <br>

                                    Our licensed child psychologists conduct detailed psychological assessments, behavior
                                    observations, and developmental screenings to evaluate each child’s mental health
                                    profile. We support a wide range of concerns including autism spectrum disorders, ADHD,
                                    learning difficulties, anxiety, emotional dysregulation, and social behavior
                                    challenges.<br> <br>

                                    Therapeutic sessions are conducted in a calm, nurturing, and play-based environment,
                                    allowing children to express their feelings freely. Interventions may include behavior
                                    therapy, cognitive-behavioral therapy (CBT), emotional regulation training, and parent
                                    guidance sessions.<br> <br>

                                    Our goal is to build emotional resilience, improve self-regulation, and enhance the
                                    child’s ability to learn, socialize, and adapt — empowering families and transforming
                                    lives through expert psychological care.




                                </p>
                                <blockquote>
                                    <p>
                                        <i class="flaticon-quote d-block"></i>
                                        Supporting Young Minds with Care and Clarity.
                                    </p>
                                </blockquote>
                                <h3 class="mb-0">Quality Care From Quality Experts:</h3>
                                <p>
                                    At Proyash, we understand that every child’s psychological well-being is as important as
                                    their physical health. Our psychology team is composed of highly qualified professionals
                                    trained in child development, behavior science, and emotional support. With years of
                                    hands-on experience in working with children with special needs, our experts are
                                    committed to providing compassionate, evidence-based care. <br><br>

                                    Each child is carefully assessed using standardized tools and personalized observation.
                                    Our psychologists work closely with families and other professionals to design
                                    effective, goal-oriented intervention plans that address emotional challenges,
                                    behavioral difficulties, learning barriers, and social interaction issues.<br><br>

                                    We don’t just treat symptoms — we listen, understand, and guide each child toward
                                    self-awareness, emotional strength, and better quality of life. Through consistent
                                    support, structured therapy, and expert guidance, we help children build the skills they
                                    need to succeed — inside and outside the classroom.


                                </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Treatments:</h3>
                                        <ul>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Comprehensive psychological assessments
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Behavioral observation and analysis
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Cognitive and emotional development screening
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Individual and group therapy sessions
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Behavior modification and management plans
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Support for autism spectrum and ADHD
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Emotional regulation and coping skills training
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Parent counseling and guidance
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Collaboration with educational and therapeutic teams
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Crisis intervention and behavioral support
                                            </li>
                                        </ul>




                                    </div>
                                    <div class="col-md-4">
                                        <img style="width: 100%; height: auto; border-radius: 8px;"
                                            src="{{ asset('/frontend/assets/uploads/service/psychology_service_management2.png') }}" />
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
