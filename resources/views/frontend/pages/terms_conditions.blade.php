@extends('frontend.layouts.partials.app')

@section('title', 'Terms & Conditions')
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
                        <h1 class="mb-0 text-white">Terms & Conditions</h1>
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="{{ route('website.index') }}">Home</a> </li>
                            <li class="breadcrumb-item active text-white">Terms & Conditions</li>
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
                <h2>Terms & Conditions</h2>
                <p class="text-muted">By accessing and using this website or our services, you agree to the following terms
                    and conditions.</p>
            </div>

            <div class="terms-content">
                <h4>1. Acceptance of Terms</h4>
                <p>By using the Proyash website or engaging with our services, you agree to comply with and be legally bound
                    by these Terms and Conditions. If you do not agree, please do not use our website or services.</p>
                <br>
                <h4>2. Educational and Therapeutic Services</h4>
                <ul>
                    <li>Proyash provides specialized educational, medical, and therapeutic support based on individual
                        assessments.</li>
                    <li>All services are designed to support the development and well-being of children with special needs.
                    </li>
                    <li>Enrollment does not guarantee specific outcomes, but we ensure quality care and expert guidance.
                    </li>
                </ul>
                <br>
                <h4>3. User Responsibilities</h4>
                <ul>
                    <li>Parents or guardians must provide accurate and complete information at the time of registration.
                    </li>
                    <li>You are responsible for attending appointments, responding to communications, and following
                        institutional guidelines.</li>
                    <li>Any misuse or disruption may lead to suspension of services.</li>
                </ul>
                <br>
                <h4>4. Intellectual Property</h4>
                <p>All content on this website — including text, images, logos, and educational materials — is the property
                    of Proyash. Unauthorized reproduction or distribution is strictly prohibited.</p>
                <br>
                <h4>5. Privacy & Data Protection</h4>
                <p>We are committed to protecting your data. Please read our <a
                        href="{{ route('website.privacy') }}">Privacy Policy</a> to understand how your information is
                    collected and used.</p>
                <br>
                <h4>6. Website Usage & External Links</h4>
                <p>Proyash may include links to external websites for informational purposes. We are not responsible for the
                    content or practices of those sites.</p>
                <br>
                <h4>7. Limitation of Liability</h4>
                <p>Proyash is not liable for any indirect or consequential damages arising from the use of our website or
                    services. Our commitment is to provide safe, inclusive, and professionally guided support.</p>
                <br>
                <h4>8. Modifications to Terms</h4>
                <p>We reserve the right to update or change these terms at any time. Updates will be posted on this page
                    with a revision date.</p> <br>

                <h4>9. Contact Information</h4>
                <p>
                    <strong>Proyash – Centre for Special Education</strong><br>
                    Email: admin@proyash.edu.bd<br>
                    Phone: +8801769-553729<br>
                </p>
            </div>
        </div>
    </section>
    {{-- end:: Services Section --}}

@endsection
@section('website_script')
@endsection
