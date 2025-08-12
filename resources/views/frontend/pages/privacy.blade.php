@extends('frontend.layouts.partials.app')

@section('title', 'Privacy Policy')
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
                        <h1 class="mb-0 text-white">Privacy Policy</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">Privacy Policy</li>
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
            <div class="section-title text-center mb-4">
                <h2>Privacy Policy</h2>
                <p class="text-muted">Your trust is important to us. At Proyash, we respect and protect your privacy.</p>
            </div>

            <div class="policy-content">
                <h4>1. Information We Collect</h4>
                <ul>
                    <li>Student details: name, date of birth, medical and educational history.</li>
                    <li>Parent/guardian contact information.</li>
                    <li>Progress reports, therapy data, and special support needs.</li>
                    <li>Website usage data such as IP address, browser info, and visited pages.</li>
                </ul><br>

                <h4>2. Purpose of Information Collection</h4>
                <ul>
                    <li>To provide individualized education and therapy support.</li>
                    <li>For communication between Proyash and parents/guardians.</li>
                    <li>To maintain student health and safety records.</li>
                    <li>To improve website and internal services.</li>
                </ul><br>

                <h4>3. Data Sharing & Disclosure</h4>
                <ul>
                    <li>We never sell or rent your information.</li>
                    <li>Data is shared only with authorized personnel and professionals when required.</li>
                    <li>Legal authorities may be provided access when mandated by law.</li>
                </ul><br>

                <h4>4. Data Security</h4>
                <ul>
                    <li>We use secure storage for digital and physical records.</li>
                    <li>Access is limited to trained and authorized staff.</li>
                    <li>Confidentiality is strictly maintained.</li>
                </ul><br>

                <h4>5. Rights of Parents/Guardians</h4>
                <ul>
                    <li>Access your child's records on request.</li>
                    <li>Request corrections if information is inaccurate.</li>
                    <li>Withdraw consent for data use (where applicable).</li>
                </ul><br>

                <h4>6. Cookies & Website</h4>
                <p>We use cookies for basic analytics and performance. You may disable them via browser settings.</p>
                <br>
                <h4>7. Changes to This Policy</h4>
                <p>This policy may be updated periodically. Please check this page regularly for the latest version.</p><br>

                <h4>8. Contact Us</h4>
                <p>
                    <strong>Proyash – Centre for Special Education</strong><br>
                    Email: admin@proyash.edu.bd<br>
                    Phone: +8801769-553729<br>
                    {{-- Website: www.proyash.edu.bd --}}
                </p>
            </div>
        </div>
    </section>
    {{-- end:: Services Section --}}

@endsection
@section('website_script')
@endsection
