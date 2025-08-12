@extends('backend.layouts.master')
@section('title', __('messages.edit_student'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.student_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.edit_student') }}</h3>
            </div>
            <!-- form start -->
            <form id="inputForm" method="POST" action="{{ route('students.update', $student->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT method for updating -->
                <div class="card-body">
                    <div class="row">

                        <div class="row">
                            <!-- Institute -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                                    <select name="institute_id" class="form-control" id="institute_id">
                                        @foreach ($institutes as $institute)
                                            <option value="{{ $institute->id }}" {{ old('institute_id', $student->institute_id) == $institute->id ? 'selected' : '' }}>
                                                {{ $institute->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('institute_id') }}</span>
                                </div>
                            </div>

                            <!-- Academic -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="academic_id">{{ __('messages.academic_year') }} <span>*</span></label>
                                    <select name="academic_id" class="form-control" id="academic_id">
                                        @foreach ($academicYears as $academicYear)
                                            <option value="{{ $academicYear->id }}" {{ old('academic_id', $student->academic_id) == $academicYear->id ? 'selected' : '' }}>
                                                {{ $academicYear->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('academic_id') }}</span>
                                </div>
                            </div>

                            <!-- Medium -->
                            <div class="col-md-2 mb-3">
                                <div class="form-group">
                                    <label for="medium_id">{{ __('messages.medium') }} <span>*</span></label>
                                    <select name="medium_id" class="form-control" id="medium_id">
                                        @foreach ($mediums as $medium)
                                            <option value="{{ $medium->id }}" {{ old('medium_id', $student->medium_id) == $medium->id ? 'selected' : '' }}>
                                                {{ $medium->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('medium_id') }}</span>
                                </div>
                            </div>

                            <!-- Shift -->
                            <div class="col-md-2 mb-3">
                                <div class="form-group">
                                    <label for="shift_id">{{ __('messages.shift') }} <span>*</span></label>
                                    <select name="shift_id" class="form-control" id="shift_id">
                                        @foreach ($shifts as $shift)
                                            <option value="{{ $shift->id }}" {{ old('shift_id', $student->shift_id) == $shift->id ? 'selected' : '' }}>
                                                {{ $shift->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('shift_id') }}</span>
                                </div>
                            </div>

                            <!-- Class -->
                            <div class="col-md-2 mb-3">
                                <div class="form-group">
                                    <label for="class_id">{{ __('messages.class') }} <span>*</span></label>
                                    <select name="class_id" class="form-control" id="class_id">
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}" {{ old('class_id', $student->class_id) == $class->id ? 'selected' : '' }}>
                                                {{ $class->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('class_id') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Name English -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name_english">{{ __('messages.name_english') }} <span>*</span></label>
                                    <input type="text" name="name_english" class="form-control" id="name_english"
                                        placeholder="Enter name in English" autocomplete="off"
                                        value="{{ old('name_english', $student->name_english) }}">
                                    <span class="text-danger">{{ $errors->first('name_english') }}</span>
                                </div>
                            </div>

                            <!-- Name Bangla -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name_bangla">{{ __('messages.name_bangla') }}</label>
                                    <input type="text" name="name_bangla" class="form-control" id="name_bangla"
                                        placeholder="Enter name in Bangla" autocomplete="off"
                                        value="{{ old('name_bangla', $student->name_bangla) }}">
                                    <span class="text-danger">{{ $errors->first('name_bangla') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Student Category -->
                            <div class="col-md-4 mb-3">
                                <label for="student_category_id">{{ __('messages.student_category_id') }}
                                    <span>*</span></label>
                                <input type="text" name="student_category_id" class="form-control"
                                    id="student_category_id"
                                    placeholder="{{ __('messages.enter_student_category_id') }}"
                                    value="{{ old('student_category_id', $student->student_category_id) }}" required>
                                @error('student_category_id')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Roll Number -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="roll_number">{{ __('messages.roll_number') }} <span>*</span></label>
                                    <input type="text" name="roll_number" class="form-control" id="roll_number"
                                        placeholder="Enter roll number"
                                        value="{{ old('roll_number', $student->roll_number) }}">
                                    <span class="text-danger">{{ $errors->first('roll_number') }}</span>
                                </div>
                            </div>

                            <!-- RFID Number -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="rfid_number">{{ __('messages.rfid_number') }} <span>*</span></label>
                                    <input type="text" name="rfid_number" class="form-control" id="rfid_number"
                                        placeholder="Enter RFID number"
                                        value="{{ old('rfid_number', $student->rfid_number) }}">
                                    <span class="text-danger">{{ $errors->first('rfid_number') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Gender -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="gender">{{ __('messages.gender') }}</label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option value="">{{ __('messages.select_gender') }}</option>
                                        <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Other" {{ old('gender', $student->gender) == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                </div>
                            </div>

                            <!-- Date of Birth -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="date_of_birth">{{ __('messages.date_of_birth') }} <span>*</span></label>
                                    <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                                        value="{{ old('date_of_birth', $student->date_of_birth ? \Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d') : '') }}">
                                    <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                </div>
                            </div>

                            <!-- Blood Group -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="blood_group">{{ __('messages.blood_group') }}</label>
                                    <select name="blood_group" class="form-control" id="blood_group">
                                        <option value="">{{ __('messages.enter_blood_group') }}</option>
                                        <option value="A+" {{ old('blood_group', $student->blood_group) == 'A+' ? 'selected' : '' }}>A+</option>
                                        <option value="A-" {{ old('blood_group', $student->blood_group) == 'A-' ? 'selected' : '' }}>A-</option>
                                        <option value="B+" {{ old('blood_group', $student->blood_group) == 'B+' ? 'selected' : '' }}>B+</option>
                                        <option value="B-" {{ old('blood_group', $student->blood_group) == 'B-' ? 'selected' : '' }}>B-</option>
                                        <option value="O+" {{ old('blood_group', $student->blood_group) == 'O+' ? 'selected' : '' }}>O+</option>
                                        <option value="O-" {{ old('blood_group', $student->blood_group) == 'O-' ? 'selected' : '' }}>O-</option>
                                        <option value="AB+" {{ old('blood_group', $student->blood_group) == 'AB+' ? 'selected' : '' }}>AB+</option>
                                        <option value="AB-" {{ old('blood_group', $student->blood_group) == 'AB-' ? 'selected' : '' }}>AB-</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                                </div>
                            </div>

                            <!-- Religion -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="religion">{{ __('messages.religion') }}</label>
                                    <select name="religion" class="form-control" id="religion">
                                        <option value="">{{ __('messages.select_religion') }}</option>
                                        <option value="Islam" {{ old('religion', $student->religion) == 'Islam' ? 'selected' : '' }}>Islam</option>
                                        <option value="Hinduism" {{ old('religion', $student->religion) == 'Hinduism' ? 'selected' : '' }}>Hinduism</option>
                                        <option value="Christianity" {{ old('religion', $student->religion) == 'Christianity' ? 'selected' : '' }}>Christianity
                                        </option>
                                        <option value="Buddhism" {{ old('religion', $student->religion) == 'Buddhism' ? 'selected' : '' }}>Buddhism</option>
                                        <option value="Other" {{ old('religion', $student->religion) == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('religion') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- NID -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="nid">{{ __('messages.nid') }}</label>
                                    <input type="text" name="nid" class="form-control" id="nid"
                                        placeholder="{{ __('messages.enter_nid') }}"
                                        value="{{ old('nid', $student->nid) }}">
                                    <span class="text-danger">{{ $errors->first('nid') }}</span>
                                </div>
                            </div>

                            <!-- Birth Certificate No -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="birth_certificate_no">{{ __('messages.birth_certificate_no') }}</label>
                                    <input type="text" name="birth_certificate_no" class="form-control"
                                        id="birth_certificate_no"
                                        placeholder="{{ __('messages.enter_birth_certificate_no') }}"
                                        value="{{ old('birth_certificate_no', $student->birth_certificate_no) }}">
                                    <span class="text-danger">{{ $errors->first('birth_certificate_no') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Present Address -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="present_address">{{ __('messages.present_address') }}</label>
                                    <textarea name="present_address" class="form-control" id="present_address" rows="3"
                                        placeholder="Enter present address">{{ old('present_address', $student->present_address) }}</textarea>
                                    <span class="text-danger">{{ $errors->first('present_address') }}</span>
                                </div>
                            </div>

                            <!-- Permanent Address -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="permanent_address">{{ __('messages.permanent_address') }}</label>
                                    <textarea name="permanent_address" class="form-control" id="permanent_address"
                                        rows="3"
                                        placeholder="Enter permanent address">{{ old('permanent_address', $student->permanent_address) }}</textarea>
                                    <span class="text-danger">{{ $errors->first('permanent_address') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Father's Name -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="fathers_name">{{ __('messages.fathers_name') }}</label>
                                    <input type="text" name="fathers_name" class="form-control" id="fathers_name"
                                        placeholder="Enter father's name"
                                        value="{{ old('fathers_name', $student->fathers_name) }}">
                                    <span class="text-danger">{{ $errors->first('fathers_name') }}</span>
                                </div>
                            </div>

                            <!-- Father's Phone -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="fathers_phone">{{ __('messages.fathers_phone') }}</label>
                                    <input type="text" name="fathers_phone" class="form-control" id="fathers_phone"
                                        placeholder="Enter father's phone"
                                        value="{{ old('fathers_phone', $student->fathers_phone) }}">
                                    <span class="text-danger">{{ $errors->first('fathers_phone') }}</span>
                                </div>
                            </div>

                            <!-- Father's Email -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="fathers_email">{{ __('messages.fathers_email') }}</label>
                                    <input type="email" name="fathers_email" class="form-control" id="fathers_email"
                                        placeholder="Enter father's email"
                                        value="{{ old('fathers_email', $student->fathers_email) }}">
                                    <span class="text-danger">{{ $errors->first('fathers_email') }}</span>
                                </div>
                            </div>

                            <!-- Father's Profession -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="fathers_profession">{{ __('messages.fathers_profession') }}</label>
                                    <input type="text" name="fathers_profession" class="form-control"
                                        id="fathers_profession" placeholder="Enter father's profession"
                                        value="{{ old('fathers_profession', $student->fathers_profession) }}">
                                    <span class="text-danger">{{ $errors->first('fathers_profession') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Mother's Name -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="mothers_name">{{ __('messages.mothers_name') }}</label>
                                    <input type="text" name="mothers_name" class="form-control" id="mothers_name"
                                        placeholder="Enter mother's name"
                                        value="{{ old('mothers_name', $student->mothers_name) }}">
                                    <span class="text-danger">{{ $errors->first('mothers_name') }}</span>
                                </div>
                            </div>

                            <!-- Mother's Phone -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="mothers_phone">{{ __('messages.mothers_phone') }}</label>
                                    <input type="text" name="mothers_phone" class="form-control" id="mothers_phone"
                                        placeholder="Enter mother's phone"
                                        value="{{ old('mothers_phone', $student->mothers_phone) }}">
                                    <span class="text-danger">{{ $errors->first('mothers_phone') }}</span>
                                </div>
                            </div>

                            <!-- Mother's Email -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="mothers_email">{{ __('messages.mothers_email') }}</label>
                                    <input type="email" name="mothers_email" class="form-control" id="mothers_email"
                                        placeholder="Enter mother's email"
                                        value="{{ old('mothers_email', $student->mothers_email) }}">
                                    <span class="text-danger">{{ $errors->first('mothers_email') }}</span>
                                </div>
                            </div>

                            <!-- Mother's Profession -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="mothers_profession">{{ __('messages.mothers_profession') }}</label>
                                    <input type="text" name="mothers_profession" class="form-control"
                                        id="mothers_profession" placeholder="Enter mother's profession"
                                        value="{{ old('mothers_profession', $student->mothers_profession) }}">
                                    <span class="text-danger">{{ $errors->first('mothers_profession') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Guardian's Name -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="guardian_name">{{ __('messages.guardian_name') }}</label>
                                    <input type="text" name="guardian_name" class="form-control" id="guardian_name"
                                        placeholder="Enter guardian's name"
                                        value="{{ old('guardian_name', $student->guardian_name) }}">
                                    <span class="text-danger">{{ $errors->first('guardian_name') }}</span>
                                </div>
                            </div>

                            <!-- Guardian's Phone -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="guardian_phone">{{ __('messages.guardian_phone') }}</label>
                                    <input type="text" name="guardian_phone" class="form-control" id="guardian_phone"
                                        placeholder="Enter guardian's phone"
                                        value="{{ old('guardian_phone', $student->guardian_phone) }}">
                                    <span class="text-danger">{{ $errors->first('guardian_phone') }}</span>
                                </div>
                            </div>

                            <!-- Guardian's Email -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="guardian_email">{{ __('messages.guardian_email') }}</label>
                                    <input type="email" name="guardian_email" class="form-control" id="guardian_email"
                                        placeholder="Enter guardian's email"
                                        value="{{ old('guardian_email', $student->guardian_email) }}">
                                    <span class="text-danger">{{ $errors->first('guardian_email') }}</span>
                                </div>
                            </div>

                            <!-- Guardian's Address -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="guardian_address">{{ __('messages.guardian_address') }}</label>
                                    <textarea name="guardian_address" class="form-control" id="guardian_address"
                                        rows="3"
                                        placeholder="Enter guardian's address">{{ old('guardian_address', default: $student->guardian_address) }}</textarea>
                                    <span class="text-danger">{{ $errors->first('guardian_address') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Image -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="image">{{ __('messages.student_image') }}</label>
                                    <input type="file" name="image" class="form-control" id="image"
                                        onchange="previewImage(event)">
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                </div>

                                <!-- Image Preview -->
                                <div class="form-group mt-2">
                                    <label>{{ __('messages.existing_image') }}</label>
                                    <div>
                                        <img id="imagePreview"
                                            src="{{ isset($student->image) ? asset('/assets/backend/images/students/' . $student->image) : '#' }}"
                                            alt="Student Image" class="img-thumbnail" width="150"
                                            style="{{ isset($student->image) ? '' : 'display: none;' }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                            <a href="{{ route('students.index') }}"
                                class="btn btn-danger">{{ __('messages.cancel') }}</a>
                        </div>
                    </div> <!-- /.row -->
                </div><!-- /.card-body -->
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
    // Optionally, if you want to handle date input on the frontend via JavaScript
    document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('date_of_birth');

        // Check if the value is already populated, and if so, format it
        if (dateInput && !dateInput.value) {
            const dbDate = "{{ old('date_of_birth', $student->date_of_birth) }}";
            if (dbDate) {
                dateInput.value = dbDate;
            }
        }
    });
</script>