@extends('frontend.layouts.partials.app')

@section('title', 'Speech & Language Therapy')
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
                        <h1 class="mb-0 text-white">Speech & Language Therapy</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item text-white">
                                <a href="{{ route('website.services') }}" style="color: white">Services</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Speech & Language Therapy</li>
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
                                        src="{{ asset('/frontend/assets/uploads/service/speech.png') }}" />
                                    <span class="serv-post-authr position-absolute">
                                        {{-- <i class="fas fa-user thm-clr"></i> --}}
                                        Speech & Language Therapy
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
                                    At Proyash, our Speech & Language Therapy service is dedicated to helping children who
                                    struggle with communication skills — including difficulties in speaking clearly,
                                    understanding spoken language, expressing thoughts, or using social language
                                    effectively. These challenges can affect a child’s ability to interact with others,
                                    perform well in school, and build self-confidence. <br> <br>

                                    Our team of qualified speech and language therapists work in a warm, supportive, and
                                    child-friendly environment. Each child receives a personalized therapy plan based on a
                                    detailed assessment of their individual needs. Therapy sessions include a variety of
                                    engaging techniques such as visual aids, storytelling, interactive games, articulation
                                    exercises, and communication boards. <br><br>

                                    This service supports children with a range of conditions, including speech delay,
                                    articulation disorders, stammering, autism spectrum disorders, and developmental
                                    language delays. By improving their communication abilities, children gain the tools
                                    they need to connect better with their peers, teachers, and families — empowering them
                                    to reach their full potential both socially and academically.
                                </p>
                                <blockquote>
                                    <p>
                                        <i class="flaticon-quote d-block"></i>
                                        Empowering Every Child to Find Their Voice.
                                    </p>
                                </blockquote>
                                <h3 class="mb-0">Quality Care From Quality Experts:</h3>
                                <p>
                                    At Proyash, we believe that every child deserves expert care tailored to their unique
                                    developmental journey. Our Speech & Language Therapy service is led by a team of highly
                                    trained, certified therapists who specialize in child communication disorders. With
                                    years of experience in the field, they bring not only clinical expertise but also
                                    patience, compassion, and a deep understanding of how children learn and grow.<br><br>

                                    We use evidence-based techniques, personalized therapy plans, and a play-based approach
                                    to create a safe and engaging environment where children feel motivated and supported.
                                    Whether a child is facing difficulties in speech clarity, language comprehension, or
                                    social communication, our professionals are equipped to guide them every step of the
                                    way.<br><br>

                                    Our goal is not just to improve communication — but to build confidence, enhance
                                    learning, and open doors to brighter possibilities. When quality care is delivered by
                                    quality experts, every word becomes a step toward independence and success.
                                </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Treatments:</h3>
                                        <ul>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Articulation and pronunciation correction
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Language development therapy (understanding & expression)
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Therapy for speech delay and stammering
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Social communication skill enhancement
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Oral motor exercises for clearer speech
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Voice therapy for pitch, volume, and quality control
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Fluency therapy for stuttering and cluttering
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Communication support for children with Autism
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Use of Augmentative & Alternative Communication (AAC) tools
                                            </li>
                                            <li>
                                                <i class="fas fa-chevron-circle-right" style="color: #FFD43B;"></i>
                                                &nbsp;&nbsp;Parent guidance and home-based practice planning
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <img style="width: 100%; height: auto; border-radius: 8px;"
                                            src="{{ asset('/frontend/assets/uploads/service/speech2.png') }}" />
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
