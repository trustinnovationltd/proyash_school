@extends('frontend.layouts.partials.app')

@section('title', 'Proyash Events')
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
                        <h1 class="mb-0 text-white">Proyash Events</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">Proyash Events</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}


    {{-- start:: Services Section --}}

    <section class="gap event_grid mt-0 pt-0">
        <div class="container">
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
    {{-- end:: Services Section --}}

@endsection
@section('website_script')
@endsection
