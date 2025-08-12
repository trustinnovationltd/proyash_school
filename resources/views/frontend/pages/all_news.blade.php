@extends('frontend.layouts.partials.app')

@section('title', 'News & Articles')
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
                        <h1 class="mb-0 text-white">News & Articles</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">News & Articles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}


    {{-- start:: Services Section --}}
    <section class="gap n_and_a pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style">
                        <figure>
                            <img decoding="async" src="{{ asset('/frontend/assets/uploads/news/n1.jpg') }}" alt="img">
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
                                {{-- <h4>By <a href="author/admin/index.html">Dr. Abc</a> --}}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-style">
                        <figure>
                            <img decoding="async" src="{{ asset('/frontend/assets/uploads/news/n2.png') }}" alt="img">
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
                            <img decoding="async" src="{{ asset('/frontend/assets/uploads/news/n3.png') }}" alt="img">
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

        </div>
    </section>
    {{-- end:: Services Section --}}

@endsection
@section('website_script')
@endsection
