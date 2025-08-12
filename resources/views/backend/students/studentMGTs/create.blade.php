@extends('backend.layouts.master')
@section('title', __('messages.add_student'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.students_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_student') }}</h3>
            </div>
            <!-- form start -->
            <form id="inputForm" method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <!-- Institute -->
                            <div class="col-md-3 mb-3">
                                <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                                <select name="institute_id" class="form-select" id="institute_id" required>
                                    <option value="" disabled selected>{{ __('messages.select_institute') }}</option>
                                    @foreach ($institutes as $institute)
                                        <option value="{{ $institute->id }}" {{ old('institute_id') == $institute->id ? 'selected' : '' }}>{{ $institute->name }}</option>
                                    @endforeach
                                </select>
                                @error('institute_id')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Academic Year -->
                            <div class="col-md-3 mb-3">
                                <label for="academic_id">{{ __('messages.academic_year') }} <span>*</span></label>
                                <select name="academic_id" id="academic_id" class="form-select" required>
                                    <option value="" disabled selected>{{ __('messages.select_academic_year') }}
                                    </option>
                                    @foreach($academicYears as $academicYear)
                                        <option value="{{ $academicYear->id }}" {{ old('academic_id') == $academicYear->id ? 'selected' : '' }}>{{ $academicYear->title }}</option>
                                    @endforeach
                                </select>
                                @error('academic_id')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Medium -->
                            <div class="col-md-2 mb-3">
                                <label for="medium_id">{{ __('messages.medium') }} <span>*</span></label>
                                <select name="medium_id" class="form-select" id="medium_id" required>
                                    <option value="" disabled selected>{{ __('messages.select_medium') }}</option>
                                    @foreach ($mediums as $medium)
                                        <option value="{{ $medium->id }}" {{ old('medium_id') == $medium->id ? 'selected' : '' }}>
                                            {{ $medium->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('medium_id')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Shift -->
                            <div class="col-md-2 mb-3">
                                <label for="shift_id">{{ __('messages.shift') }} <span>*</span></label>
                                <select name="shift_id" class="form-select" id="shift_id" required>
                                    <option value="" disabled selected>{{ __('messages.select_shift') }}</option>
                                    @foreach ($shifts as $shift)
                                        <option value="{{ $shift->id}}" {{ old('shift_id') == $shift->id ? 'selected' : '' }}>
                                            {{ $shift->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('shift_id')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <!-- Class -->
                            <div class="col-md-2 mb-3">
                                <label for="class_id">{{ __('messages.class') }} <span>*</span></label>
                                <select name="class_id" class="form-select" id="class_id" required>
                                    <option value="" disabled selected>{{ __('messages.select_class') }}</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>
                                            {{ $class->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('class_id')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="row">
                        <!-- Name (English) -->
                        <div class="col-md-6 mb-3">
                            <label for="name_english">{{ __('messages.name_english') }} <span>*</span></label>
                            <input type="text" name="name_english" class="form-control" id="name_english"
                                placeholder="{{ __('messages.enter_name_english') }}" value="{{ old('name_english') }}"
                                required>
                            @error('name_english')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Name (Bangla) -->
                        <div class="col-md-6 mb-3">
                            <label for="name_bangla">{{ __('messages.name_bangla') }} <span>*</span></label>
                            <input type="text" name="name_bangla" class="form-control" id="name_bangla"
                                placeholder="{{ __('messages.enter_name_bangla') }}" value="{{ old('name_bangla') }}"
                                required>
                            @error('name_bangla')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- Student Category -->
                        <div class="col-md-4 mb-3">
                            <label for="student_category_id">{{ __('messages.student_category_id') }}
                                <span>*</span></label>
                            <input type="text" name="student_category_id" class="form-control" id="student_category_id"
                                placeholder="{{ __('messages.enter_student_category_id') }}"
                                value="{{ old('student_category_id') }}" required>
                            @error('student_category_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Roll Number -->
                        <div class="col-md-4 mb-3">
                            <label for="roll_number">{{ __('messages.roll_number') }} <span>*</span></label>
                            <input type="text" name="roll_number" class="form-control" id="roll_number"
                                placeholder="{{ __('messages.enter_roll_number') }}" value="{{ old('roll_number') }}"
                                required>
                            @error('roll_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- RFID Number -->
                        <div class="col-md-4 mb-3">
                            <label for="rfid_number">{{ __('messages.rfid_number') }}</label>
                            <input type="text" name="rfid_number" class="form-control" id="rfid_number"
                                placeholder="{{ __('messages.enter_rfid_number') }}" value="{{ old('rfid_number') }}">
                            @error('rfid_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- (Gender) -->
                         <div class="col-md-3 mb-3">
                            <label for="gender">{{ __('messages.gender') }} <span>*</span></label>
                            <select name="gender" class="form-select" id="gender">
                                <option value="">{{ __('messages.select_gender') }}</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>{{ __('messages.male') }}</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>{{ __('messages.female') }}</option>
                                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>{{ __('messages.other') }}</option>
                            </select>
                            @error('gender')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Date of Birth -->
                        <div class="col-md-3 mb-3">
                            <label for="date_of_birth">{{ __('messages.date_of_birth') }} <span>*</span></label>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                                value="{{ old('date_of_birth') }}" required>
                            @error('date_of_birth')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Blood Group -->
                         <div class="col-md-3 mb-3">
                            <label for="blood_group">{{ __('messages.blood_group') }}</label>
                            <select name="blood_group" class="form-select" id="blood_group">
                                <option value="">{{ __('messages.enter_blood_group') }}</option>
                                <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                                <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                            </select>
                            @error('blood_group')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        
                        <!-- Religion -->
                         <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="religion">{{ __('messages.religion') }}</label>
                                <select name="religion" class="form-select" id="religion">
                                    <option value="">{{ __('messages.select_religion') }}</option>
                                    <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>{{ __('messages.islam') }}</option>
                                    <option value="Hinduism" {{ old('religion') == 'Hinduism' ? 'selected' : '' }}>{{ __('messages.hinduism') }}</option>
                                    <option value="Christianity" {{ old('religion') == 'Christianity' ? 'selected' : '' }}>{{ __('messages.christianity') }}</option>
                                    <option value="Buddhism" {{ old('religion') == 'Buddhism' ? 'selected' : '' }}>{{ __('messages.buddhism') }}</option>
                                    <option value="Other" {{ old('religion') == 'Other' ? 'selected' : '' }}>{{ __('messages.other') }}</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('religion') }}</span>
                            </div>
                        </div>
                        
                        <div class="row">
                        <!-- NID -->
                        <div class="col-md-6 mb-3">
                            <label for="nid">{{ __('messages.nid') }}</label>
                            <input type="text" name="nid" class="form-control" id="nid"
                                placeholder="{{ __('messages.enter_nid') }}" value="{{ old('nid') }}">
                            @error('nid')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Birth Certificate No -->
                        <div class="col-md-6 mb-3">
                            <label for="birth_certificate_no">{{ __('messages.birth_certificate_no') }}</label>
                            <input type="text" name="birth_certificate_no" class="form-control"
                                id="birth_certificate_no" placeholder="{{ __('messages.enter_birth_certificate_no') }}"
                                value="{{ old('birth_certificate_no') }}">
                            @error('birth_certificate_no')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- Present Address -->
                        <div class="col-md-6 mb-3">
                            <label for="present_address">{{ __('messages.present_address') }}</label>
                            <input type="text" name="present_address" class="form-control" id="present_address"
                                placeholder="{{ __('messages.enter_present_address') }}"
                                value="{{ old('present_address') }}">
                            @error('present_address')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Permanent Address -->
                        <div class="col-md-6 mb-3">
                            <label for="permanent_address">{{ __('messages.permanent_address') }}</label>
                            <input type="text" name="permanent_address" class="form-control" id="permanent_address"
                                placeholder="{{ __('messages.enter_permanent_address') }}"
                                value="{{ old('permanent_address') }}">
                            @error('permanent_address')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- Father's Name -->
                        <div class="col-md-3 mb-3">
                            <label for="fathers_name">{{ __('messages.fathers_name') }}</label>
                            <input type="text" name="fathers_name" class="form-control" id="fathers_name"
                                placeholder="{{ __('messages.enter_fathers_name') }}" value="{{ old('fathers_name') }}">
                            @error('fathers_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Father's Phone -->
                        <div class="col-md-3 mb-3">
                            <label for="fathers_phone">{{ __('messages.fathers_phone') }}</label>
                            <input type="text" name="fathers_phone" class="form-control" id="fathers_phone"
                                placeholder="{{ __('messages.enter_fathers_phone') }}"
                                value="{{ old('fathers_phone') }}">
                            @error('fathers_phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Father's Email -->
                        <div class="col-md-3 mb-3">
                            <label for="fathers_email">{{ __('messages.fathers_email') }}</label>
                            <input type="email" name="fathers_email" class="form-control" id="fathers_email"
                                placeholder="{{ __('messages.enter_fathers_email') }}"
                                value="{{ old('fathers_email') }}">
                            @error('fathers_email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Father's Profession -->
                        <div class="col-md-3 mb-3">
                            <label for="fathers_profession">{{ __('messages.fathers_profession') }}</label>
                            <input type="text" name="fathers_profession" class="form-control" id="fathers_profession"
                                placeholder="{{ __('messages.enter_fathers_profession') }}"
                                value="{{ old('fathers_profession') }}">
                            @error('fathers_profession')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- Mother's Name -->
                        <div class="col-md-3 mb-3">
                            <label for="mothers_name">{{ __('messages.mothers_name') }}</label>
                            <input type="text" name="mothers_name" class="form-control" id="mothers_name"
                                placeholder="{{ __('messages.enter_mothers_name') }}" value="{{ old('mothers_name') }}">
                            @error('mothers_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Mother's Phone -->
                        <div class="col-md-3 mb-3">
                            <label for="mothers_phone">{{ __('messages.mothers_phone') }}</label>
                            <input type="text" name="mothers_phone" class="form-control" id="mothers_phone"
                                placeholder="{{ __('messages.enter_mothers_phone') }}"
                                value="{{ old('mothers_phone') }}">
                            @error('mothers_phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Mother's Email -->
                        <div class="col-md-3 mb-3">
                            <label for="mothers_email">{{ __('messages.mothers_email') }}</label>
                            <input type="email" name="mothers_email" class="form-control" id="mothers_email"
                                placeholder="{{ __('messages.enter_mothers_email') }}"
                                value="{{ old('mothers_email') }}">
                            @error('mothers_email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Mother's Profession -->
                        <div class="col-md-3 mb-3">
                            <label for="mothers_profession">{{ __('messages.mothers_profession') }}</label>
                            <input type="text" name="mothers_profession" class="form-control" id="mothers_profession"
                                placeholder="{{ __('messages.enter_mothers_profession') }}"
                                value="{{ old('mothers_profession') }}">
                            @error('mothers_profession')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- Guardian Name -->
                        <div class="col-md-3 mb-3">
                            <label for="guardian_name">{{ __('messages.guardian_name') }}</label>
                            <input type="text" name="guardian_name" class="form-control" id="guardian_name"
                                placeholder="{{ __('messages.enter_guardian_name') }}"
                                value="{{ old('guardian_name') }}">
                            @error('guardian_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Guardian Phone -->
                        <div class="col-md-3 mb-3">
                            <label for="guardian_phone">{{ __('messages.guardian_phone') }}</label>
                            <input type="text" name="guardian_phone" class="form-control" id="guardian_phone"
                                placeholder="{{ __('messages.enter_guardian_phone') }}"
                                value="{{ old('guardian_phone') }}">
                            @error('guardian_phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Guardian Email -->
                        <div class="col-md-3 mb-3">
                            <label for="guardian_email">{{ __('messages.guardian_email') }}</label>
                            <input type="email" name="guardian_email" class="form-control" id="guardian_email"
                                placeholder="{{ __('messages.enter_guardian_email') }}"
                                value="{{ old('guardian_email') }}">
                            @error('guardian_email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <!-- Guardian Address -->
                        <div class="col-md-3 mb-3">
                            <label for="guardian_address">{{ __('messages.guardian_address') }}</label>
                            <input type="text" name="guardian_address" class="form-control" id="guardian_address"
                                placeholder="{{ __('messages.enter_guardian_address') }}"
                                value="{{ old('guardian_address') }}">
                            @error('guardian_address')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>

                        <div class="row">
                        <!-- Image -->
                        <div class="col-md-6 mb-3">
                            <label for="image">{{ __('messages.student_image') }}</label>
                            <input type="file" name="image" class="form-control" id="image">
                            @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('students.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection