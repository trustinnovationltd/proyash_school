@extends('frontend.layouts.partials.app')

@section('title', 'Services We Provide')
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
                        <h1 class="mb-0 text-white">Services We Provide</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item text-white">
                                <a href="{{ route('website.services') }}" style="color: white">Services</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Services We Provide</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}


    {{-- start:: Services Section --}}
    <section>
        <div class="w-100 pt-30 pb-100 position-relative">
            <div class="container">
                <div class="serv-wrap2 res-row position-relative w-100">
                    <div class="row mrg30">

                        <!-- Medical Assessment & Care -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/medical_assesment.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.medical_assessment_care') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.medical_assessment_care') }}">Medical
                                            Assessment & Care</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Neurological Assessment -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/NeurologicalAssessment.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.neurological_assessment') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.neurological_assessment') }}">Neurological
                                            Assessment</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Audiology Assessment -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/audiology_assessment.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.audiology_assessment') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.audiology_assessment') }}">Audiology
                                            Assessment</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Psychology Service & Management -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/psychology_service_management.png') }}"
                                        alt="">
                                    <a class="position-absolute"
                                        href="{{ route('website.psychology_service_management') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a
                                            href="{{ route('website.psychology_service_management') }}">Psychology Service
                                            & Management</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Diet Management -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/diet_management.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.diet_management') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.diet_management') }}">Diet Management</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!-- Counselling -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/counselling.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.counselling') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.counselling') }}">Counselling</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Speech & Language Therapy -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/speech.png') }}" alt="">
                                    <a class="position-absolute" href="{{ route('website.speech_language_therapy') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.speech_language_therapy') }}">Speech &
                                            Language Therapy</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Occupational & Sensory Therapy -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/occupational_sensory_therapy.png') }}"
                                        alt="">
                                    <a class="position-absolute"
                                        href="{{ route('website.occupational_sensory_therapy') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a
                                            href="{{ route('website.occupational_sensory_therapy') }}">Occupational &
                                            Sensory Therapy</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Physiotherapy -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/physiotherapy.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.physiotherapy') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.physiotherapy') }}">Physiotherapy</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!-- Hydrotherapy -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/hydrotherapy.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.hydrotherapy') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.hydrotherapy') }}">Hydrotherapy</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!-- Prosthetic & Orthotic Center -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/ProstheticOrthoticCenter.png') }}"
                                        alt="">
                                    <a class="position-absolute"
                                        href="{{ route('website.prosthetic_orthotic_center') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a
                                            href="{{ route('website.prosthetic_orthotic_center') }}">Prosthetic & Orthotic
                                            Center</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Music Therapy & Yoga -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/MusicTherapyYoga.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.music_therapy_yoga') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.music_therapy_yoga') }}">Music Therapy
                                            & Yoga</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Hyperbaric Oxygen Chamber -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/HyperbaricOxygenChamber.png') }}"
                                        alt="">
                                    <a class="position-absolute"
                                        href="{{ route('website.hyperbaric_oxygen_chamber') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a
                                            href="{{ route('website.hyperbaric_oxygen_chamber') }}">Hyperbaric Oxygen
                                            Chamber</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Swimming -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/swimming.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.swimming') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.swimming') }}">Swimming</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Art & Craft -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/ArtCraft.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.art_craft') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.art_craft') }}">Art & Craft</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Music & Dance -->
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="serv-box2 position-relative w-100">
                                <div class="serv-img2 brd-rd10 position-relative overflow-hidden w-100">
                                    <img class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/service/MusicDance.png') }}"
                                        alt="">
                                    <a class="position-absolute" href="{{ route('website.music_dance') }}"><i
                                            class="flaticon-plus"></i></a>
                                </div>
                                <div class="serv-info2 position-absolute">
                                    <h3 class="mb-0"><a href="{{ route('website.music_dance') }}">Music & Dance</a>
                                    </h3>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end:: Services Section --}}

@endsection
@section('website_script')
@endsection
