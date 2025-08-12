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

@section('title', 'Employee Profile')
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.employee_management'))

@section('content')
    <div class="row">
        @include('backend.layouts.partials.message')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Employee Profile</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('employees.index') }}" class="btn btn-success btn-sm" style="color: white">
                            Employee List
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6"><strong>Name (EN):</strong> {{ $employee->name_english }}</div>
                                    <div class="col-md-6"><strong>Name (BN):</strong> {{ $employee->name_bangla }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><strong>NID:</strong> {{ $employee->nid }}</div>
                                    <div class="col-md-6"><strong>Phone:</strong> {{ $employee->phone }}</div>
                                    <div class="col-md-6"><strong>Email:</strong> {{ $employee->email }}</div>
                                    <div class="col-md-6"><strong>Date of Birth:</strong> {{ $employee->date_of_birth }}
                                    </div>
                                    <div class="col-md-6"><strong>Blood Group:</strong> {{ $employee->blood_group }}</div>
                                    <div class="col-md-6"><strong>Religion:</strong> {{ $employee->religion }}</div>
                                    <div class="col-md-6"><strong>Gender:</strong> {{ $employee->gender }}</div>
                                    <div class="col-md-6"><strong>Joining Date:</strong> {{ $employee->joining_date }}
                                    </div>
                                    <div class="col-md-6"><strong>Status:</strong>
                                        {{ $employee->status == 1 ? 'Active' : 'Inactive' }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                @if ($employee->image)
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <strong>Photo:</strong><br>
                                            <div class="text-md-center preview-box">
                                                <img src="{{ asset('storage/' . $employee->image) }}" class="img-thumbnail"
                                                    style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="card mt-4 pb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Address Information</h3>
                                </div>
                                <div class="card-body pb-5">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>Present Address:</strong><br>
                                            {{ $employee->present_village }},
                                            {{ $employee->present_post_office }},
                                            {{ $employee->present_upazila }},
                                            {{ $employee->present_district }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Permanent Address:</strong><br>
                                            {{ $employee->permanent_village }},
                                            {{ $employee->permanent_post_office }},
                                            {{ $employee->permanent_upazila }},
                                            {{ $employee->permanent_district }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4 pb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Work Experience</h3>
                                </div>
                                <div class="card-body pb-5">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>Year of Experience:</strong> {{ $employee->year_of_experience }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Experience Information:</strong>
                                            {{ $employee->experience_information }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Educational Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>SSC:</strong><br>
                                            School: {{ $employee->ssc_school }}<br>
                                            Board: {{ $employee->ssc_board }}<br>
                                            Year: {{ $employee->ssc_year }}<br>
                                            Result: {{ $employee->ssc_result }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>HSC:</strong><br>
                                            College: {{ $employee->hsc_college }}<br>
                                            Board: {{ $employee->hsc_board }}<br>
                                            Year: {{ $employee->hsc_year }}<br>
                                            Result: {{ $employee->hsc_result }}
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>Diploma:</strong><br>
                                            Institute: {{ $employee->diploma_institute }}<br>
                                            Subject: {{ $employee->diploma_subject }}<br>
                                            Year: {{ $employee->diploma_year }}<br>
                                            Result: {{ $employee->diploma_result }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Bachelor:</strong><br>
                                            University: {{ $employee->bachelor_university }}<br>
                                            Department: {{ $employee->bachelor_department }}<br>
                                            Year: {{ $employee->bachelor_year }}<br>
                                            Result: {{ $employee->bachelor_result }}
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>Masters:</strong><br>
                                            University: {{ $employee->masters_university }}<br>
                                            Department: {{ $employee->masters_department }}<br>
                                            Year: {{ $employee->masters_year }}<br>
                                            Result: {{ $employee->masters_result }}
                                        </div>
                                        <div class="col-md-6">
                                            <strong>Other Qualification:</strong><br>
                                            {{ $employee->other_qualification }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Documents</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <strong>Signature:</strong><br>
                                            @if ($employee->signature)
                                                <img src="{{ asset('storage/' . $employee->signature) }}"
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
            </div>
        </div>
    </div>
@endsection
