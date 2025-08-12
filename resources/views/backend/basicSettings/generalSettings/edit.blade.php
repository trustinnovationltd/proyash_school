@extends('backend.layouts.master')
@section('title', __('messages.edit_general_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.general_settings_management'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.edit_general_setting') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('general-settings.update', $generalSetting->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <!-- Institute Dropdown -->
                        <div class="col-md-6 mb-3">
                            <label for="institute_id" class="form-label">{{ __('messages.institute') }}</label>
                            <select name="institute_id" id="institute_id" class="form-select">
                                @foreach($institutes as $institute)
                                    <option value="{{ $institute->id }}" {{ $generalSetting->institute_id == $institute->id ? 'selected' : '' }}>
                                        {{ $institute->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Present SMS (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="present_sms" name="present_sms" value="1" {{ $generalSetting->present_sms ? 'checked' : '' }}>
                            <label class="form-check-label" for="present_sms">{{ __('messages.general_present_sms') }}</label>
                        </div>

                        <!-- Leave SMS (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="leave_sms" name="leave_sms" value="1" {{ $generalSetting->leave_sms ? 'checked' : '' }}>
                            <label class="form-check-label" for="leave_sms">{{ __('messages.general_leave_sms') }}</label>
                        </div>

                        <!-- Absent SMS (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="absent_sms" name="absent_sms" value="1" {{ $generalSetting->absent_sms ? 'checked' : '' }}>
                            <label class="form-check-label" for="absent_sms">{{ __('messages.general_absent_sms') }}</label>
                        </div>

                        <!-- Fee Collection SMS (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="fee_collection_sms" name="fee_collection_sms" value="1" {{ $generalSetting->fee_collection_sms ? 'checked' : '' }}>
                            <label class="form-check-label" for="fee_collection_sms">{{ __('messages.general_fee_collection_sms') }}</label>
                        </div>

                        <!-- Admission Greeting SMS (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="admission_greeting_sms" name="admission_greeting_sms" value="1" {{ $generalSetting->admission_greeting_sms ? 'checked' : '' }}>
                            <label class="form-check-label" for="admission_greeting_sms">{{ __('messages.general_admission_greeting_sms') }}</label>
                        </div>

                        <!-- Birthday SMS (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="birthday_sms" name="birthday_sms" value="1" {{ $generalSetting->birthday_sms ? 'checked' : '' }}>
                            <label class="form-check-label" for="birthday_sms">{{ __('messages.general_birthday_sms') }}</label>
                        </div>

                        <!-- Student ID Automatic (on/off) -->
                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="student_id_automatic" name="student_id_automatic" value="1" {{ $generalSetting->student_id_automatic ? 'checked' : '' }}>
                            <label class="form-check-label" for="student_id_automatic">{{ __('messages.general_student_id_automatic') }}</label>
                        </div>

                        <!-- Updated By (hidden field, automatically handled) -->
                        <input type="hidden" name="updated_by" value="{{ Auth::id() }}">

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                        <a href="{{ route('general-settings.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
