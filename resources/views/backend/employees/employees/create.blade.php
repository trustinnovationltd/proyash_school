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

@section('title', __('messages.add_employee'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.employee_management'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.add_employee') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <h4>Basic Information</h4>
                            <div class="row">
                                <!-- Name (English) -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="name_english">Name (EN)<span>*</span></label>
                                        <input type="text" name="name_english" class="form-control"
                                            placeholder="Enter Name English" id="name_english"
                                            value="{{ old('name_english') }}" required>
                                        <span class="text-danger">{{ $errors->first('name_english') }}</span>
                                    </div>
                                </div>

                                <!-- Name (Bangla) -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="name_bangla">Name (BN)<span>*</span></label>
                                        <input type="text" name="name_bangla" class="form-control"
                                            placeholder="Enter Name Bangla" id="name_bangla"
                                            value="{{ old('name_bangla') }}" required>
                                        <span class="text-danger">{{ $errors->first('name_bangla') }}</span>
                                    </div>
                                </div>


                                <!-- NID  -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="nid">NID No<span>*</span></label>
                                        <input type="number" name="nid" class="form-control"
                                            placeholder="Enter NID number" id="nid" value="{{ old('nid') }}"
                                            required>
                                        <span class="text-danger">{{ $errors->first('nid') }}</span>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="phone">{{ __('messages.phone') }} <span>*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone"
                                            id="phone" value="{{ old('phone') }}" required>
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="email">{{ __('messages.email') }}</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                            id="email" value="{{ old('email') }}">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="date_of_birth">{{ __('messages.date_of_birth') }}
                                            <span>*</span></label>
                                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                                            value="{{ old('date_of_birth') }}" required>
                                        <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                    </div>
                                </div>

                                <!-- Blood Group -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <label for="blood_group">{{ __('messages.blood_group') }}</label>
                                    <select name="blood_group" class="form-select" id="blood_group">
                                        <option value="">{{ __('messages.enter_blood_group') }}</option>
                                        <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+
                                        </option>
                                        <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-
                                        </option>
                                        <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+
                                        </option>
                                        <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-
                                        </option>
                                        <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+
                                        </option>
                                        <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-
                                        </option>
                                        <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+
                                        </option>
                                        <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-
                                        </option>
                                    </select>
                                    @error('blood_group')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Religion -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="religion">{{ __('messages.religion') }} <span>*</span></label>
                                        <select name="religion" class="form-select" id="religion">
                                            <option value="">{{ __('messages.select_religion') }}</option>
                                            <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>
                                                {{ __('messages.islam') }}
                                            </option>
                                            <option value="Hinduism" {{ old('religion') == 'Hinduism' ? 'selected' : '' }}>
                                                {{ __('messages.hinduism') }}
                                            </option>
                                            <option value="Christianity"
                                                {{ old('religion') == 'Christianity' ? 'selected' : '' }}>
                                                {{ __('messages.christianity') }}</option>
                                            <option value="Buddhism" {{ old('religion') == 'Buddhism' ? 'selected' : '' }}>
                                                {{ __('messages.buddhism') }}
                                            </option>
                                            <option value="Other" {{ old('religion') == 'Other' ? 'selected' : '' }}>
                                                {{ __('messages.other') }}
                                            </option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('religion') }}</span>
                                    </div>
                                </div>


                                <!-- Religion -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="gender">Gender <span>*</span></label>
                                        <select name="gender" class="form-select" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                                Male
                                            </option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                Female
                                            </option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    </div>
                                </div>

                                <!-- Joining Date -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="joining_date">{{ __('messages.joining_date') }} <span>*</span></label>
                                        <input type="date" name="joining_date" class="form-control" id="joining_date"
                                            value="{{ old('joining_date') }}" required>
                                        <span class="text-danger">{{ $errors->first('joining_date') }}</span>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label>{{ __('messages.status') }} <span>*</span></label>
                                        <select name="status" class="form-select" required>
                                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>
                                                {{ __('messages.active') }}
                                            </option>
                                            <option value="0" {{ old('status', 1) == 0 ? 'selected' : '' }}>
                                                {{ __('messages.inactive') }}
                                            </option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    </div>
                                </div>
                            </div>


                            <h4>Address</h4>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Present Village / Area</label>
                                    <input type="text" name="present_village" class="form-control"
                                        value="{{ old('present_village') }}">
                                    <span class="text-danger">{{ $errors->first('present_village') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Present Post Office</label>
                                    <input type="text" name="present_post_office" class="form-control"
                                        value="{{ old('present_post_office') }}">
                                    <span class="text-danger">{{ $errors->first('present_post_office') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Present Upazila</label>
                                    <input type="text" name="present_upazila" class="form-control"
                                        value="{{ old('present_upazila') }}">
                                    <span class="text-danger">{{ $errors->first('present_upazila') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Present District / City</label>
                                    <input type="text" name="present_district" class="form-control"
                                        value="{{ old('present_district') }}">
                                    <span class="text-danger">{{ $errors->first('present_district') }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Permanent Village / Area</label>
                                    <input type="text" name="permanent_village" class="form-control"
                                        value="{{ old('permanent_village') }}">
                                    <span class="text-danger">{{ $errors->first('permanent_village') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Permanent Post Office</label>
                                    <input type="text" name="permanent_post_office" class="form-control"
                                        value="{{ old('permanent_post_office') }}">
                                    <span class="text-danger">{{ $errors->first('permanent_post_office') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Permanent Upazila</label>
                                    <input type="text" name="permanent_upazila" class="form-control"
                                        value="{{ old('permanent_upazila') }}">
                                    <span class="text-danger">{{ $errors->first('permanent_upazila') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Permanent District / City</label>
                                    <input type="text" name="permanent_district" class="form-control"
                                        value="{{ old('permanent_district') }}">
                                    <span class="text-danger">{{ $errors->first('permanent_district') }}</span>
                                </div>
                            </div>


                            <h4>Educational Information</h4>
                            {{-- SSC --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>School Name (SSC / Equivalent)</label>
                                    <input type="text" name="ssc_school" class="form-control"
                                        value="{{ old('ssc_school') }}">
                                    <span class="text-danger">{{ $errors->first('ssc_school') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Board</label>
                                    <input type="text" name="ssc_board" class="form-control"
                                        value="{{ old('ssc_board') }}">
                                    <span class="text-danger">{{ $errors->first('ssc_board') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Passing Year</label>
                                    <input type="number" name="ssc_year" class="form-control"
                                        value="{{ old('ssc_year') }}">
                                    <span class="text-danger">{{ $errors->first('ssc_year') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Result (GPA / Division)</label>
                                    <input type="text" name="ssc_result" class="form-control"
                                        value="{{ old('ssc_result') }}">
                                    <span class="text-danger">{{ $errors->first('ssc_result') }}</span>
                                </div>
                            </div>

                            {{-- HSC --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>College Name (HSC / Equivalent)</label>
                                    <input type="text" name="hsc_college" class="form-control"
                                        value="{{ old('hsc_college') }}">
                                    <span class="text-danger">{{ $errors->first('hsc_college') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Board</label>
                                    <input type="text" name="hsc_board" class="form-control"
                                        value="{{ old('hsc_board') }}">
                                    <span class="text-danger">{{ $errors->first('hsc_board') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Passing Year</label>
                                    <input type="number" name="hsc_year" class="form-control"
                                        value="{{ old('hsc_year') }}">
                                    <span class="text-danger">{{ $errors->first('hsc_year') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Result (GPA / Division)</label>
                                    <input type="text" name="hsc_result" class="form-control"
                                        value="{{ old('hsc_result') }}">
                                    <span class="text-danger">{{ $errors->first('hsc_result') }}</span>
                                </div>
                            </div>

                            {{-- Diploma (if any) --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Institute Name (Diploma (If Applicable))</label>
                                    <input type="text" name="diploma_institute" class="form-control"
                                        value="{{ old('diploma_institute') }}">
                                    <span class="text-danger">{{ $errors->first('diploma_institute') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Technology/Subject</label>
                                    <input type="text" name="diploma_subject" class="form-control"
                                        value="{{ old('diploma_subject') }}">
                                    <span class="text-danger">{{ $errors->first('diploma_subject') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Passing Year</label>
                                    <input type="number" name="diploma_year" class="form-control"
                                        value="{{ old('diploma_year') }}">
                                    <span class="text-danger">{{ $errors->first('diploma_year') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Result (CGPA / Division)</label>
                                    <input type="text" name="diploma_result" class="form-control"
                                        value="{{ old('diploma_result') }}">
                                    <span class="text-danger">{{ $errors->first('diploma_result') }}</span>
                                </div>
                            </div>

                            {{-- Bachelor / Honours --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>University Name (Bachelor / Honours)</label>
                                    <input type="text" name="bachelor_university" class="form-control"
                                        value="{{ old('bachelor_university') }}">
                                    <span class="text-danger">{{ $errors->first('bachelor_university') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Department</label>
                                    <input type="text" name="bachelor_department" class="form-control"
                                        value="{{ old('bachelor_department') }}">
                                    <span class="text-danger">{{ $errors->first('bachelor_department') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Passing Year</label>
                                    <input type="number" name="bachelor_year" class="form-control"
                                        value="{{ old('bachelor_year') }}">
                                    <span class="text-danger">{{ $errors->first('bachelor_year') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Result (CGPA / Division)</label>
                                    <input type="text" name="bachelor_result" class="form-control"
                                        value="{{ old('bachelor_result') }}">
                                    <span class="text-danger">{{ $errors->first('bachelor_result') }}</span>
                                </div>
                            </div>

                            {{-- Masters (If any) --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>University Name (Masters)</label>
                                    <input type="text" name="masters_university" class="form-control"
                                        value="{{ old('masters_university') }}">
                                    <span class="text-danger">{{ $errors->first('masters_university') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Department</label>
                                    <input type="text" name="masters_department" class="form-control"
                                        value="{{ old('masters_department') }}">
                                    <span class="text-danger">{{ $errors->first('masters_department') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Passing Year</label>
                                    <input type="number" name="masters_year" class="form-control"
                                        value="{{ old('masters_year') }}">
                                    <span class="text-danger">{{ $errors->first('masters_year') }}</span>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-2">
                                    <label>Result (CGPA / Division)</label>
                                    <input type="text" name="masters_result" class="form-control"
                                        value="{{ old('masters_result') }}">
                                    <span class="text-danger">{{ $errors->first('masters_result') }}</span>
                                </div>
                            </div>

                            {{-- Others --}}
                            <div class="row mb-3">
                                <div class="col-md-12 mb-2">
                                    <label>Details (If Other Qualifications)</label>
                                    <textarea name="other_qualification" class="form-control" rows="1">{{ old('other_qualification') }}</textarea>
                                    <span class="text-danger">{{ $errors->first('other_qualification') }}</span>
                                </div>
                            </div>


                            <h4>Work Experience</h4>
                            <div class="row mb-3">

                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="year_of_experience">Year of Experience <span>*</span></label>
                                        <input type="number" name="year_of_experience" class="form-control"
                                            id="year_of_experience" value="{{ old('year_of_experience') }}">
                                        <span class="text-danger">{{ $errors->first('year_of_experience') }}</span>
                                    </div>
                                </div>
                                <!-- Experience Information -->
                                <div class="col-lg-9 col-md-8 mb-3">
                                    <div class="form-group">
                                        <label for="experience_information">Work Description</label>
                                        <textarea name="experience_information" class="form-control" placeholder="Enter experience information"
                                            rows="1" id="experience_information">{{ old('experience_information') }}</textarea>
                                        <span class="text-danger">{{ $errors->first('experience_information') }}</span>
                                    </div>
                                </div>
                            </div>


                            <h4>Documents</h4>
                            <div class="row">
                                <!-- Image -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="image">{{ __('messages.employee_img') }}</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            accept="image/*">
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        <div id="imagePreview" class="row mt-3 d-none"></div>
                                    </div>
                                </div>

                                <!-- Signature -->
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="signature">{{ __('messages.signature') }}</label>
                                        <input type="file" name="signature" class="form-control" id="signature"
                                            accept="image/*">
                                        <span class="text-danger">{{ $errors->first('signature') }}</span>
                                        <div id="signaturePreview" class="row mt-3 d-none"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                        <a href="{{ route('employees.index') }}"
                            class="btn btn-danger">{{ __('messages.cancel') }}</a>
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

        // Attach to both inputs
        setupImagePreview('signature', 'signaturePreview');
        setupImagePreview('image', 'imagePreview');
    </script>


@endsection
