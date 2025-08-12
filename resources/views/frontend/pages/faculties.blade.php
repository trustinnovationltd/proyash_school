@extends('frontend.layouts.partials.app')

@section('title', 'Faculty Members')
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
                        <h1 class="mb-0 text-white">Faculty Members</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">Faculty</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End:: Website Title --}}

    {{-- Start:: Our Specialists Section --}}
    <section id="specialistsList">
        <div class="w-100 pt-100 white-layer opc95 pb-110 position-relative">
            <div class="container">

                {{-- Start:: Our Admin Section --}}
                <div class="sec-title v2 text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <h2 class="mb-0 text-color3">Meet Our Specialists Team</h2>
                        <p class="mb-0 position-relative sub-shap thm-shp d-inline-block">Autism is
                            not a disability, it is a different ability</p>

                        <h2 class="mb-0 text-color3 mt-3" style="color: #ffad01">Admin Section</h2>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/images/staff/principle.jpeg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Lt Col Hasan Shahriar Kabir, psc, Arty
                                        </a></h3><span class="d-block thm-clr">Principal, Proyash, Jashore Area</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mrg30 justify-content-center">
                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/Mina_Sultana.jpg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">Mina Sultana (Sr.
                                            Teacher)</a></h3>
                                    <span class="d-block thm-clr">Vice Principal</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/Sayla_Sarmin.jpg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Sayla Sarmin (Sr. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Information & Research Officer</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Our Admin Section --}}
                {{-- Start:: Speech & Language Therapy Section --}}
                <div class="sec-title v2 text-center w-100">
                    <div class="sec-title-inner d-inline-block">
                        <h2 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Therapy Section
                        </h2>
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Speech & Language Therapy Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/abdul_kader.jpg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">Md. Abdul Kader</a></h3>
                                    <span class="d-block thm-clr">Speech & Language Therapist</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/runa_laila.jpg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Runa Laila
                                        </a></h3><span class="d-block thm-clr">
                                        Speech & Language Therapist
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/samima_islam.jpg') }}" alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Samima Islam <br>(Asst. Teacher )
                                        </a></h3><span class="d-block thm-clr">Associate Speech & Language Therapist</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/jesmin_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Jesmin Khatun <br>(Asst. Teacher )
                                        </a></h3><span class="d-block thm-clr">
                                        Associate Speech & Language Therapist
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Speech & Language Therapy Section --}}

                {{-- Start:: Physio --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Physio Therapy Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">
                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/sumaya_sultana.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Sumaya Sultana
                                        </a></h3><span class="d-block thm-clr">
                                        Physio Therapist
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Physio --}}

                {{-- Start:: Occupational theraphy Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Occupational Theraphy Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/nurjahan_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">Mst. Nurjahan khatun</a></h3>
                                    <span class="d-block thm-clr">Occupational Therapist</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/hasnat_parvez.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Md. Hasnat Parvez
                                        </a></h3><span class="d-block thm-clr">
                                        Occupational Therapist
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/mahmudur_rahman.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Md. Mahmudur Rahman <br>(Sr. Teacher)
                                        </a></h3><span class="d-block thm-clr">Associate Occupational Therapist</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Occupational theraphy Section --}}

                {{-- Start:: Psychologist Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Psychology Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/tonima_islam_tonni.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">Tonima Islam Tonni</a></h3>
                                    <span class="d-block thm-clr">Psychologist</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}
                    </div>
                </div>
                {{-- End:: Psychologist Section --}}

                {{-- Start:: extracurricular Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Extracurricular Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/shohidul_islam.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Md. Shohidul Islam <br>(Asst Teacher)
                                        </a></h3><span class="d-block thm-clr">
                                        Game Teacher
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/mostafizur_rahaman.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Md. Mostafizur Rahman <br>(Asst. Teacher)
                                        </a></h3><span class="d-block thm-clr">Dance Teacher</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/syeda_tamanna.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Syeda Tamanna Sharmin <br>(Asst. Teacher)
                                        </a></h3><span class="d-block thm-clr">
                                        Music Teacher
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: extracurricular Section --}}


                {{-- Start:: Autism Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h2 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Academic Section
                        </h2>
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">Autism Section</h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/parvin_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Parvin Khatun <br>(Senior Teacher)</a></h3>
                                    <span class="d-block thm-clr">Autism Level -3 <br>(Section Incharge)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/sabrina_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Sabrin khatun <br>(Asst. Teacher )
                                        </a></h3><span class="d-block thm-clr">
                                        Autism Level -5
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/moriam_munni.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Moriam Munni <br>(Asst. Teacher )
                                        </a></h3><span class="d-block thm-clr">Autism Level -4</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/nurun_nahar.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Nurun Nahar <br>(Asst. Teacher )
                                        </a></h3><span class="d-block thm-clr">Autism Level -1</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/nargis_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Nargis Khatun <br>(Asst. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Autism Level -1</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/anonya_janak.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Anonya Janak <br>(Asst. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Autism Level -3</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/nanoja_parvin.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Nanoja Parvin <br>(Asst. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Autism Level -4</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/sonia_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Sonia Khatun <br>(Jr. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Autism Level -6</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/jesmin_akter.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Jesmin Akter <br>(Jr. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Autism Level -5</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/nasima_khatun.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">Mst. Nasima Khatun <br>(Jr. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Autism Level -2</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Autism Section --}}

                {{-- Start:: ECDP Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            ECDP (Early Child Development Programme) Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/shahina_sultana.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">
                                            Shahina Sultana <br> (Sr. Teacher)
                                        </a>
                                    </h3>
                                    <span class="d-block thm-clr">ECDP Level -2 <br>(Section Incharge)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/nasima_akther.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0">
                                        <a href="#">
                                            Nasima Akhter <br>(Jr. Teacher)
                                        </a>
                                    </h3>
                                    <span class="d-block thm-clr">ECDP (Reception Class)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}


                    </div>
                </div>
                {{-- End:: ECDP Section --}}

                {{-- Start:: Pre - Primary Section Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Pre - Primary Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/shunanda_sharmin.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">Mst. Shunanda Sharmin <br>(Asst. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Pre-Primary Level -1 <br>(Section Incharge)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/golam_mostafa.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Md. Golam Mostafa <br>(Asst. Teacher)
                                        </a></h3><span class="d-block thm-clr">
                                        Pre-Primary Level -2
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/jannatul_ferdose.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Jannatul Ferdose <br>(Jr. Teacher)
                                        </a></h3><span class="d-block thm-clr">Pre Primary Level -3</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Pre - Primary Section Section --}}

                {{-- Start:: Primary Section Section --}}
                <div class="sec-title v2 text-center w-100 mt-5">
                    <div class="sec-title-inner d-inline-block">
                        <h3 class="mb-0 text-color3 mt-3" style="color: #ffad01">
                            Primary Section
                        </h3>
                    </div>
                </div>
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30 justify-content-center">

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/jharna_akter.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">Jharna Akhter <br>(Sr. Teacher)</a>
                                    </h3>
                                    <span class="d-block thm-clr">Primary Level -4 <br>(Section Incharge)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/towhidur_rahaman.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Towhidur Rahman <br>(Asst. Teacher)
                                        </a></h3><span class="d-block thm-clr">
                                        Primary (Class - VII)
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/rebeka_sultana.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Rebeka Sultana <br>(Asst. Teacher)
                                        </a></h3><span class="d-block thm-clr">Primary (Class-II)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/kakoli_rani.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Kakoli Rani Biswas (Asst. Teacher)
                                        </a></h3><span class="d-block thm-clr">Primary (Class-I)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                        {{-- Start:: Team Members single  --}}
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box text-center position-relative w-100">
                                <div class="team-img brd-rd5 overflow-hidden position-relative w-100">
                                    <img decoding="async" class="img-fluid w-100"
                                        src="{{ asset('/frontend/assets/uploads/staff/marufa_akhter.jpg') }}"
                                        alt="Doctor">
                                </div>
                                <div class="team-info z1 bg-color5 position-relative w-100">
                                    <h3 class="mb-0"><a href="#">
                                            Marufa Akhter <br>(Jr. Teacher )
                                        </a></h3><span class="d-block thm-clr">Primary (Class-III)</span>
                                </div>
                            </div>
                        </div>
                        {{-- End:: Team Members single --}}

                    </div>
                </div>
                {{-- End:: Primary Section Section --}}

            </div>
        </div>
    </section>
    {{-- End:: Our Specialists Section --}}

@endsection
@section('website_script')
@endsection
