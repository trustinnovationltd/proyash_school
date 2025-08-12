@extends('frontend.layouts.partials.app')

@section('title', '404 Not Found')
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
                        <h1 class="mb-0 text-white">404 Error Page</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item text-white">Services</li>
                            <li class="breadcrumb-item active text-white">404 Error</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}


    <section>
        <div class="w-100 pt-20 pb-110 position-relative">
            <div class="container">
                <div class="error-wrap position-relative text-center w-100">
                    <div class="error-inner d-inline-block">
                        <div class="error-cap position-relative d-inline-block w-100 mt-5">
                            <strong class="position-absolute">404</strong>
                            <h2 class="mb-0">OOPS, Page Not Found</h2>
                            <p class="mb-0">We are sorry but the page you are looking for does not or has been
                                moved. please check back later or use the search box.</p>
                        </div>
                        <a class="thm-btn scndry-bg brd-rd10 position-relative overflow-hidden d-inline-block mt-5"
                            style="background: #126800" href="{{ route('website.index') }}"><i class="fas fa-home"></i>Back
                            To Home</a>
                    </div>
                </div><!-- Error Wrap -->
            </div>
        </div>
    </section>

@endsection
@section('website_script')
@endsection
