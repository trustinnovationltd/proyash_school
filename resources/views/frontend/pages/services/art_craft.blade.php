@extends('frontend.layouts.partials.app')

@section('title', 'Art & Craft')
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
                        <h1 class="mb-0 text-white">Art & Craft</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item text-white">
                                <a href="{{ route('website.services') }}" style="color: white">Services</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Art & Craft</li>
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
                                        src="{{ asset('/frontend/assets/uploads/service/ArtCraft.png') }}" />
                                    <span class="serv-post-authr position-absolute">
                                        {{-- <i class="fas fa-user thm-clr"></i> --}}
                                        Art & Craft
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
                                    At Proyash, our Art & Craft program provides a joyful and therapeutic outlet where
                                    children with special needs can express themselves freely, explore creativity, and build
                                    critical cognitive and motor skills. From painting and drawing to clay modeling and
                                    collage-making, every session is designed to unlock imagination while supporting
                                    developmental growth. <br> <br>

                                    Through art, children improve fine motor control, hand-eye coordination, attention span,
                                    and emotional expression. Our trained instructors use adaptive tools and step-by-step
                                    guidance to ensure every child — regardless of ability — can participate, succeed, and
                                    enjoy the process of creation. <br> <br>

                                    This program also encourages communication, problem-solving, and social interaction,
                                    especially for children with autism, ADHD, or learning delays. Whether it’s a
                                    finger-paint masterpiece or a group craft project, each creation becomes a moment of
                                    pride and progress for the child.
                                </p>
                                <blockquote>
                                    <p>
                                        <i class="flaticon-quote d-block"></i>
                                        Creativity That Heals, Colors That Speak.
                                    </p>
                                </blockquote>
                                <h3 class="mb-0">Quality Care From Quality Experts:</h3>
                                <p>
                                    Our Art & Craft sessions are led by creative therapists and special education
                                    professionals who understand how art can serve as a powerful communication and
                                    development tool for children with special needs. We offer both structured and
                                    free-choice activities to suit different personalities, sensory profiles, and learning
                                    styles. <br> <br>

                                    Specialized tools like easy-grip brushes, textured papers, non-toxic paints, and
                                    adaptive scissors are used so that no child is left out. Children are encouraged to
                                    explore without pressure and are celebrated for their effort and creativity — not just
                                    the final outcome. <br> <br>

                                    This nurturing, judgment-free environment builds self-confidence, focus, and joy,
                                    contributing to the child’s overall therapeutic journey at Proyash.
                                </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Treatments:</h3>
                                        <ul>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Fine motor skill development and coordination
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Sensory integration through different textures and materials
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Emotional expression and self-regulation
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Cognitive stimulation through creative planning
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Improved attention span and task completion
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Language and communication development during group tasks
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Confidence building through completed creative work
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-4">
                                        <img style="width: 100%; height: auto; border-radius: 8px;"
                                            src="{{ asset('/frontend/assets/uploads/service/ArtCraft2.png') }}" />
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
