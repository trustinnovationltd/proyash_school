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

@section('title', 'Edit Student')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Admission')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Student</h3>
                <a href="{{ route('admin.admission.students.index') }}" class="btn btn-success btn-sm float-end">Student
                    List</a>
            </div>
            <form action="{{ route('admin.admission.students.update', $student->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                {{-- filepath: resources/views/backend/students/admission/_form.blade.php --}}
                @csrf

                <div class="card-body">
                    <h4>Student Basic Information</h4>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Name (BN)</label>
                            <input type="text" name="name_bn" class="form-control"
                                value="{{ old('name_bn', $student->name_bn ?? '') }}">
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Name (EN)</label>
                            <input type="text" name="name_en" class="form-control"
                                value="{{ old('name_en', $student->name_en ?? '') }}">
                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Admission Date</label>
                            <input type="date" name="admission_date" class="form-control"
                                value="{{ old('admission_date', $student->admission_date ?? '') }}">
                            <span class="text-danger">{{ $errors->first('admission_date') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Birth Date</label>
                            <input type="date" name="birth_date" class="form-control"
                                value="{{ old('birth_date', $student->birth_date ?? '') }}">
                            <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="nationality">Nationality</label>
                            <input type="text" name="nationality" class="form-control"
                                value="{{ old('nationality', $student->nationality ?? '') }}">
                            <span class="text-danger">{{ $errors->first('nationality') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="religion">Religion</label>
                            <input type="text" name="religion" class="form-control"
                                value="{{ old('religion', $student->religion ?? '') }}">
                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="blood_group">Blood Group</label>
                            <select id="blood_group" name="blood_group" class="form-select">
                                <option value="">Select Blood Group</option>
                                @foreach (['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'] as $group)
                                    <option value="{{ $group }}"
                                        {{ old('blood_group', $student->blood_group ?? '') == $group ? 'selected' : '' }}>
                                        {{ $group }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-select">
                                <option value="1"
                                    {{ old('status', $student->status ?? '1') == '1' ? 'selected' : '' }}>
                                    Active</option>
                                <option value="0"
                                    {{ old('status', $student->status ?? '1') == '0' ? 'selected' : '' }}>
                                    Inactive</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>
                    </div>

                    <h4>Parents Information</h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Name (BN)</label>
                            <input type="text" name="father_name_bn" class="form-control"
                                value="{{ old('father_name_bn', $student->guardian->father_name_bn ?? '') }}">
                            <span class="text-danger">{{ $errors->first('father_name_bn') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Name (EN)</label>
                            <input type="text" name="father_name_en" class="form-control"
                                value="{{ old('father_name_en', $student->guardian->father_name_en ?? '') }}">
                            <span class="text-danger">{{ $errors->first('father_name_en') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Mobile</label>
                            <input type="text" name="father_mobile" class="form-control"
                                value="{{ old('father_mobile', $student->guardian->father_mobile ?? '') }}">
                            <span class="text-danger">{{ $errors->first('father_mobile') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Occupation</label>
                            <input type="text" name="father_occupation" class="form-control"
                                value="{{ old('father_occupation', $student->guardian->father_occupation ?? '') }}">
                            <span class="text-danger">{{ $errors->first('father_occupation') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Basic Income (BDT)</label>
                            <input type="number" name="father_basic_income" class="form-control"
                                value="{{ old('father_basic_income', $student->guardian->father_basic_income ?? '') }}">
                            <span class="text-danger">{{ $errors->first('father_basic_income') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Father's Gross Income (BDT)</label>
                            <input type="number" name="father_gross_income" class="form-control"
                                value="{{ old('father_gross_income', $student->guardian->father_gross_income ?? '') }}">
                            <span class="text-danger">{{ $errors->first('father_gross_income') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Name (BN)</label>
                            <input type="text" name="mother_name_bn" class="form-control"
                                value="{{ old('mother_name_bn', $student->guardian->mother_name_bn ?? '') }}">
                            <span class="text-danger">{{ $errors->first('mother_name_bn') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Name (EN)</label>
                            <input type="text" name="mother_name_en" class="form-control"
                                value="{{ old('mother_name_en', $student->guardian->mother_name_en ?? '') }}">
                            <span class="text-danger">{{ $errors->first('mother_name_en') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Mobile</label>
                            <input type="text" name="mother_mobile" class="form-control"
                                value="{{ old('mother_mobile', $student->guardian->mother_mobile ?? '') }}">
                            <span class="text-danger">{{ $errors->first('mother_mobile') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Occupation</label>
                            <input type="text" name="mother_occupation" class="form-control"
                                value="{{ old('mother_occupation', $student->guardian->mother_occupation ?? '') }}">
                            <span class="text-danger">{{ $errors->first('mother_occupation') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Basic Income (BDT)</label>
                            <input type="number" name="mother_basic_income" class="form-control"
                                value="{{ old('mother_basic_income', $student->guardian->mother_basic_income ?? '') }}">
                            <span class="text-danger">{{ $errors->first('mother_basic_income') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Mother's Gross Income (BDT)</label>
                            <input type="number" name="mother_gross_income" class="form-control"
                                value="{{ old('mother_gross_income', $student->guardian->mother_gross_income ?? '') }}">
                            <span class="text-danger">{{ $errors->first('mother_gross_income') }}</span>
                        </div>
                    </div>

                    <h4>Address</h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present Village / Area</label>
                            <input type="text" name="present_village" class="form-control"
                                value="{{ old('present_village', $student->address->present_village ?? '') }}">
                            <span class="text-danger">{{ $errors->first('present_village') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present Post Office</label>
                            <input type="text" name="present_post_office" class="form-control"
                                value="{{ old('present_post_office', $student->address->present_post_office ?? '') }}">
                            <span class="text-danger">{{ $errors->first('present_post_office') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present Upazila</label>
                            <input type="text" name="present_upazila" class="form-control"
                                value="{{ old('present_upazila', $student->address->present_upazila ?? '') }}">
                            <span class="text-danger">{{ $errors->first('present_upazila') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Present District / City</label>
                            <input type="text" name="present_district" class="form-control"
                                value="{{ old('present_district', $student->address->present_district ?? '') }}">
                            <span class="text-danger">{{ $errors->first('present_district') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent Village / Area</label>
                            <input type="text" name="permanent_village" class="form-control"
                                value="{{ old('permanent_village', $student->address->permanent_village ?? '') }}">
                            <span class="text-danger">{{ $errors->first('permanent_village') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent Post Office</label>
                            <input type="text" name="permanent_post_office" class="form-control"
                                value="{{ old('permanent_post_office', $student->address->permanent_post_office ?? '') }}">
                            <span class="text-danger">{{ $errors->first('permanent_post_office') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent Upazila</label>
                            <input type="text" name="permanent_upazila" class="form-control"
                                value="{{ old('permanent_upazila', $student->address->permanent_upazila ?? '') }}">
                            <span class="text-danger">{{ $errors->first('permanent_upazila') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label>Permanent District / City</label>
                            <input type="text" name="permanent_district" class="form-control"
                                value="{{ old('permanent_district', $student->address->permanent_district ?? '') }}">
                            <span class="text-danger">{{ $errors->first('permanent_district') }}</span>
                        </div>
                    </div>

                    <h4>Documents</h4>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label class="form-label">Guardian Signature</label>
                            <input class="form-control" type="file" name="guardian_signature">
                            @if (!empty($student->guardian->guardian_signature))
                                <img src="{{ asset('storage/' . $student->guardian->guardian_signature) }}"
                                    alt="Guardian Signature" width="80">
                            @endif
                            <span class="text-danger">{{ $errors->first('guardian_signature') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label class="form-label">Student Image</label>
                            <input class="form-control" type="file" name="student_image">
                            @if (!empty($student->image))
                                <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" width="80">
                            @endif
                            <span class="text-danger">{{ $errors->first('student_image') }}</span>
                        </div>
                        <div class="col-lg-3 col-md-4 mb-2">
                            <label class="form-label">Student Signature</label>
                            <input class="form-control" type="file" name="student_signature">
                            @if (!empty($student->student_signature))
                                <img src="{{ asset('storage/' . $student->student_signature) }}" alt="Student Signature"
                                    width="80">
                            @endif
                            <span class="text-danger">{{ $errors->first('student_signature') }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-info" type="submit">Update Information</button>
                    <a href="{{ route('admin.admission.students.index') }}" class="btn btn-danger text-white">Cancel</a>
                </div>
            </form>
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
        setupImagePreview('guardianSignature', 'guardianPreview');
        setupImagePreview('studentSignature', 'studentPreview');
        setupImagePreview('studentImage', 'studentImagePreview');
    </script>


@endsection
