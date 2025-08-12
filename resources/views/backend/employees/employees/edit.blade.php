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

@section('title', __('messages.edit_employee'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.employee_management'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.edit_employee') }}</h3>
                </div>
                <form id="inputForm" method="POST" action="{{ route('employees.update', $employee->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <h4>Basic Information</h4>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Name (English) <span class="text-danger">*</span></label>
                                <input type="text" name="name_english" class="form-control"
                                    value="{{ old('name_english', $employee->name_english) }}" required>
                                <span class="text-danger">{{ $errors->first('name_english') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Name (Bangla) <span class="text-danger">*</span></label>
                                <input type="text" name="name_bangla" class="form-control"
                                    value="{{ old('name_bangla', $employee->name_bangla) }}" required>
                                <span class="text-danger">{{ $errors->first('name_bangla') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>NID <span class="text-danger">*</span></label>
                                <input type="text" name="nid" class="form-control"
                                    value="{{ old('nid', $employee->nid) }}" required>
                                <span class="text-danger">{{ $errors->first('nid') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $employee->phone) }}" required>
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $employee->email) }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" name="date_of_birth" class="form-control"
                                    value="{{ old('date_of_birth', $employee->date_of_birth) }}" required>
                                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Blood Group</label>
                                <input type="text" name="blood_group" class="form-control"
                                    value="{{ old('blood_group', $employee->blood_group) }}">
                                <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Religion <span class="text-danger">*</span></label>
                                <input type="text" name="religion" class="form-control"
                                    value="{{ old('religion', $employee->religion) }}" required>
                                <span class="text-danger">{{ $errors->first('religion') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="Male"
                                        {{ old('gender', $employee->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female"
                                        {{ old('gender', $employee->gender) == 'Female' ? 'selected' : '' }}>Female
                                    </option>
                                    <option value="Other"
                                        {{ old('gender', $employee->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Joining Date <span class="text-danger">*</span></label>
                                <input type="date" name="joining_date" class="form-control"
                                    value="{{ old('joining_date', $employee->joining_date) }}" required>
                                <span class="text-danger">{{ $errors->first('joining_date') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control" required>
                                    <option value="1" {{ old('status', $employee->status) == 1 ? 'selected' : '' }}>
                                        Active</option>
                                    <option value="0" {{ old('status', $employee->status) == 0 ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                        <h4>Address</h4>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Present Village</label>
                                <input type="text" name="present_village" class="form-control"
                                    value="{{ old('present_village', $employee->present_village) }}">
                                <span class="text-danger">{{ $errors->first('present_village') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Present Post Office</label>
                                <input type="text" name="present_post_office" class="form-control"
                                    value="{{ old('present_post_office', $employee->present_post_office) }}">
                                <span class="text-danger">{{ $errors->first('present_post_office') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Present Upazila</label>
                                <input type="text" name="present_upazila" class="form-control"
                                    value="{{ old('present_upazila', $employee->present_upazila) }}">
                                <span class="text-danger">{{ $errors->first('present_upazila') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Present District</label>
                                <input type="text" name="present_district" class="form-control"
                                    value="{{ old('present_district', $employee->present_district) }}">
                                <span class="text-danger">{{ $errors->first('present_district') }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Permanent Village</label>
                                <input type="text" name="permanent_village" class="form-control"
                                    value="{{ old('permanent_village', $employee->permanent_village) }}">
                                <span class="text-danger">{{ $errors->first('permanent_village') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Permanent Post Office</label>
                                <input type="text" name="permanent_post_office" class="form-control"
                                    value="{{ old('permanent_post_office', $employee->permanent_post_office) }}">
                                <span class="text-danger">{{ $errors->first('permanent_post_office') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Permanent Upazila</label>
                                <input type="text" name="permanent_upazila" class="form-control"
                                    value="{{ old('permanent_upazila', $employee->permanent_upazila) }}">
                                <span class="text-danger">{{ $errors->first('permanent_upazila') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Permanent District</label>
                                <input type="text" name="permanent_district" class="form-control"
                                    value="{{ old('permanent_district', $employee->permanent_district) }}">
                                <span class="text-danger">{{ $errors->first('permanent_district') }}</span>
                            </div>
                        </div>

                        <h4>Educational Information</h4>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>SSC School</label>
                                <input type="text" name="ssc_school" class="form-control"
                                    value="{{ old('ssc_school', $employee->ssc_school) }}">
                                <span class="text-danger">{{ $errors->first('ssc_school') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>SSC Board</label>
                                <input type="text" name="ssc_board" class="form-control"
                                    value="{{ old('ssc_board', $employee->ssc_board) }}">
                                <span class="text-danger">{{ $errors->first('ssc_board') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>SSC Year</label>
                                <input type="text" name="ssc_year" class="form-control"
                                    value="{{ old('ssc_year', $employee->ssc_year) }}">
                                <span class="text-danger">{{ $errors->first('ssc_year') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>SSC Result</label>
                                <input type="text" name="ssc_result" class="form-control"
                                    value="{{ old('ssc_result', $employee->ssc_result) }}">
                                <span class="text-danger">{{ $errors->first('ssc_result') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>HSC College</label>
                                <input type="text" name="hsc_college" class="form-control"
                                    value="{{ old('hsc_college', $employee->hsc_college) }}">
                                <span class="text-danger">{{ $errors->first('hsc_college') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>HSC Board</label>
                                <input type="text" name="hsc_board" class="form-control"
                                    value="{{ old('hsc_board', $employee->hsc_board) }}">
                                <span class="text-danger">{{ $errors->first('hsc_board') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>HSC Year</label>
                                <input type="text" name="hsc_year" class="form-control"
                                    value="{{ old('hsc_year', $employee->hsc_year) }}">
                                <span class="text-danger">{{ $errors->first('hsc_year') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>HSC Result</label>
                                <input type="text" name="hsc_result" class="form-control"
                                    value="{{ old('hsc_result', $employee->hsc_result) }}">
                                <span class="text-danger">{{ $errors->first('hsc_result') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Diploma Institute</label>
                                <input type="text" name="diploma_institute" class="form-control"
                                    value="{{ old('diploma_institute', $employee->diploma_institute) }}">
                                <span class="text-danger">{{ $errors->first('diploma_institute') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Diploma Subject</label>
                                <input type="text" name="diploma_subject" class="form-control"
                                    value="{{ old('diploma_subject', $employee->diploma_subject) }}">
                                <span class="text-danger">{{ $errors->first('diploma_subject') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Diploma Year</label>
                                <input type="text" name="diploma_year" class="form-control"
                                    value="{{ old('diploma_year', $employee->diploma_year) }}">
                                <span class="text-danger">{{ $errors->first('diploma_year') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Diploma Result</label>
                                <input type="text" name="diploma_result" class="form-control"
                                    value="{{ old('diploma_result', $employee->diploma_result) }}">
                                <span class="text-danger">{{ $errors->first('diploma_result') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Bachelor University</label>
                                <input type="text" name="bachelor_university" class="form-control"
                                    value="{{ old('bachelor_university', $employee->bachelor_university) }}">
                                <span class="text-danger">{{ $errors->first('bachelor_university') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Bachelor Department</label>
                                <input type="text" name="bachelor_department" class="form-control"
                                    value="{{ old('bachelor_department', $employee->bachelor_department) }}">
                                <span class="text-danger">{{ $errors->first('bachelor_department') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Bachelor Year</label>
                                <input type="text" name="bachelor_year" class="form-control"
                                    value="{{ old('bachelor_year', $employee->bachelor_year) }}">
                                <span class="text-danger">{{ $errors->first('bachelor_year') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Bachelor Result</label>
                                <input type="text" name="bachelor_result" class="form-control"
                                    value="{{ old('bachelor_result', $employee->bachelor_result) }}">
                                <span class="text-danger">{{ $errors->first('bachelor_result') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Masters University</label>
                                <input type="text" name="masters_university" class="form-control"
                                    value="{{ old('masters_university', $employee->masters_university) }}">
                                <span class="text-danger">{{ $errors->first('masters_university') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Masters Department</label>
                                <input type="text" name="masters_department" class="form-control"
                                    value="{{ old('masters_department', $employee->masters_department) }}">
                                <span class="text-danger">{{ $errors->first('masters_department') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Masters Year</label>
                                <input type="text" name="masters_year" class="form-control"
                                    value="{{ old('masters_year', $employee->masters_year) }}">
                                <span class="text-danger">{{ $errors->first('masters_year') }}</span>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Masters Result</label>
                                <input type="text" name="masters_result" class="form-control"
                                    value="{{ old('masters_result', $employee->masters_result) }}">
                                <span class="text-danger">{{ $errors->first('masters_result') }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Other Qualification</label>
                                <textarea name="other_qualification" class="form-control">{{ old('other_qualification', $employee->other_qualification) }}</textarea>
                                <span class="text-danger">{{ $errors->first('other_qualification') }}</span>
                            </div>
                        </div>

                        <h4>Work Experience</h4>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 mb-2">
                                <label>Year of Experience</label>
                                <input type="number" name="year_of_experience" class="form-control"
                                    value="{{ old('year_of_experience', $employee->year_of_experience) }}">
                                <span class="text-danger">{{ $errors->first('year_of_experience') }}</span>
                            </div>
                            <div class="col-lg-9 col-md-8 mb-2">
                                <label>Experience Information</label>
                                <textarea name="experience_information" class="form-control">{{ old('experience_information', $employee->experience_information) }}</textarea>
                                <span class="text-danger">{{ $errors->first('experience_information') }}</span>
                            </div>
                        </div>

                        <h4>Documents</h4>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Employee Image</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    accept="image/*">
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                @if ($employee->image)
                                    <div class="preview-box mt-2">
                                        <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image">
                                    </div>
                                @endif
                                <div id="imagePreview" class="row mt-3 d-none"></div>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-3">
                                <label>Signature</label>
                                <input type="file" name="signature" class="form-control" id="signature"
                                    accept="image/*">
                                <span class="text-danger">{{ $errors->first('signature') }}</span>
                                @if ($employee->signature)
                                    <div class="preview-box mt-2">
                                        <img src="{{ asset('storage/' . $employee->signature) }}" alt="Signature">
                                    </div>
                                @endif
                                <div id="signaturePreview" class="row mt-3 d-none"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function setupImagePreview(inputId, previewId) {
            const input = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewId);

            input.addEventListener('change', function() {
                const files = Array.from(this.files);
                previewContainer.innerHTML = '';

                if (files.length > 0) {
                    previewContainer.classList.remove('d-none');

                    files.forEach((file, index) => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const col = document.createElement('div');
                            col.classList.add('col-6', 'col-md-4');

                            const previewBox = document.createElement('div');
                            previewBox.classList.add('preview-box', 'position-relative');

                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('img-fluid', 'border', 'rounded');

                            const removeBtn = document.createElement('button');
                            removeBtn.innerHTML = '&times;';
                            removeBtn.classList.add('btn', 'btn-sm', 'btn-danger', 'position-absolute',
                                'top-0', 'end-0');
                            removeBtn.setAttribute('type', 'button');
                            removeBtn.addEventListener('click', () => {
                                input.value = '';
                                previewContainer.innerHTML = '';
                                previewContainer.classList.add('d-none');
                            });

                            previewBox.appendChild(img);
                            previewBox.appendChild(removeBtn);
                            col.appendChild(previewBox);
                            previewContainer.appendChild(col);
                        };

                        reader.readAsDataURL(file);
                    });
                } else {
                    previewContainer.classList.add('d-none');
                    previewContainer.innerHTML = '';
                }
            });
        }

        setupImagePreview('signature', 'signaturePreview');
        setupImagePreview('image', 'imagePreview');
    </script>
@endsection
