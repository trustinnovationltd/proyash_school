@extends('backend.layouts.master')
@section('css')
    <style>
        .preview-box {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .preview-box img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
@endsection

@section('title', 'Admission')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Admission')

@section('content')
    <div class="row">
        @include('backend.layouts.partials.message')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Student Profile</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('admin.admission.students.index') }}" type="button" class="btn btn-success btn-sm"
                            style="color: white">
                            Admission Student List
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Student Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6"><strong>Name (BN):</strong> {{ $student->name_bn }}</div>
                                    <div class="col-md-6"><strong>Name (EN):</strong> {{ $student->name_en }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><strong>Birth Date:</strong> {{ $student->birth_date }}</div>
                                    <div class="col-md-6"><strong>Nationality:</strong> {{ $student->nationality }}</div>
                                    <div class="col-md-6"><strong>Religion:</strong> {{ $student->religion }}</div>
                                    <div class="col-md-6"><strong>Admission Date:</strong> {{ $student->admission_date }}
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <strong>Blood Group:</strong> {{ $student->blood_group ?? '' }}
                                    </div>

                                    <div class="col-md-6">
                                        <strong>Status:</strong>
                                        {{ $student->status == '1' ? 'Active' : ($student->status == '2' ? 'Inactive' : 'Deleted') }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if ($student->image)
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <strong>Photo:</strong><br>
                                                <div class="text-md-center preview-box">
                                                    {{-- Display student image --}}
                                                    <img src="{{ asset('storage/' . $student->image) }}"
                                                        class="img-thumbnail" style="width: 150px;">
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="card mt-4 pb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Guardian Information</h3>
                                </div>
                                <div class="card-body pb-5">
                                    <div class="row mb-3">
                                        <div class="col-md-6"><strong>Father Name (BN):</strong>
                                            {{ $student->guardian->father_name_bn }}</div>
                                        <div class="col-md-6"><strong>Father Name (EN):</strong>
                                            {{ $student->guardian->father_name_en }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6"><strong>Father Occupation:</strong>
                                            {{ $student->guardian->father_occupation }}
                                        </div>
                                        <div class="col-md-6"><strong>Father Organization:</strong>
                                            {{ $student->guardian->father_organization_name }}
                                        </div>
                                        <div class="col-md-6"><strong>Father Basic Income:</strong>
                                            {{ $student->guardian->father_basic_income }}</div>
                                        <div class="col-md-6"><strong>Father Gross Income:</strong>
                                            {{ $student->guardian->father_gross_income }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6"><strong>Mother Name (BN):</strong>
                                            {{ $student->guardian->mother_name_bn }}</div>
                                        <div class="col-md-6"><strong>Mother Name (EN):</strong>
                                            {{ $student->guardian->mother_name_en }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6"><strong>Mother Occupation:</strong>
                                            {{ $student->guardian->mother_occupation }}
                                        </div>
                                        <div class="col-md-6"><strong>Mother Organization:</strong>
                                            {{ $student->guardian->mother_organization_name }}
                                        </div>
                                        <div class="col-md-6"><strong>Mother Basic Income:</strong>
                                            {{ $student->guardian->mother_basic_income }}</div>
                                        <div class="col-md-6"><strong>Mother Gross Income:</strong>
                                            {{ $student->guardian->mother_gross_income }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Contact Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6"><strong>Father Mobile:</strong>
                                            {{ $student->guardian->father_mobile }}</div>
                                        <div class="col-md-6"><strong>Mother Mobile:</strong>
                                            {{ $student->guardian->mother_mobile }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Address Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>Present Address:</strong><br>
                                            {{ $student->address->present_village }},
                                            {{ $student->address->present_post_office }},
                                            {{ $student->address->present_upazila }},
                                            {{ $student->address->present_district }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Permanent Address:</strong><br>
                                            {{ $student->address->permanent_village }},
                                            {{ $student->address->permanent_post_office }},
                                            {{ $student->address->permanent_upazila }},
                                            {{ $student->address->permanent_district }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Documents</h3>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <strong>Guardian Signature:</strong><br>
                                    @if ($student->guardian->guardian_signature)
                                        <img src="{{ asset('storage/' . $student->guardian->guardian_signature) }}"
                                            class="img-thumbnail w-50">
                                    @else
                                        <span>No signature</span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <strong>Student Signature:</strong><br>
                                    @if ($student->student_signature)
                                        <img src="{{ asset('storage/' . $student->student_signature) }}"
                                            class="img-thumbnail w-50">
                                    @else
                                        <span>No signature</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('script')

    @endsection
