@extends('backend.layouts.master')
@section('title', __('messages.add_general_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.general_settings_management'))

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_general_setting') }}</h3>
            </div>
            <!-- form start -->
            <form id="inputForm" method="POST" action="{{ route('general-settings.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <!-- Institute Id -->
                    <div class="mb-3 col-md-6">
                        <label for="institute_id" class="form-label">{{ __('messages.institute') }}</label>
                        <select name="institute_id" id="institute_id" class="form-select">
                            <!-- Institutes data passed from controller -->
                            <option value="">{{ __('messages.select_institute') }}</option>
                            @foreach($institutes as $institute)
                            <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Present SMS (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="present_sms" name="present_sms" value="1">
                        <label class="form-check-label" for="present_sms">{{ __('messages.general_present_sms') }}</label>
                    </div>

                    <!-- Leave SMS (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="leave_sms" name="leave_sms" value="1">
                        <label class="form-check-label" for="leave_sms">{{ __('messages.general_leave_sms') }}</label>
                    </div>

                    <!-- Absent SMS (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="absent_sms" name="absent_sms" value="1">
                        <label class="form-check-label" for="absent_sms">{{ __('messages.general_absent_sms') }}</label>
                    </div>

                    <!-- Fee Collection SMS (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="fee_collection_sms" name="fee_collection_sms" value="1">
                        <label class="form-check-label" for="fee_collection_sms">{{ __('messages.general_fee_collection_sms') }}</label>
                    </div>

                    <!-- Admission Greeting SMS (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="admission_greeting_sms" name="admission_greeting_sms" value="1">
                        <label class="form-check-label" for="admission_greeting_sms">{{ __('messages.general_admission_greeting_sms') }}</label>
                    </div>

                    <!-- Birthday SMS (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="birthday_sms" name="birthday_sms" value="1">
                        <label class="form-check-label" for="birthday_sms">{{ __('messages.general_birthday_sms') }}</label>
                    </div>

                    <!-- Student ID Automatic (on/off) -->
                    <div class="mb-3 form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="student_id_automatic" name="student_id_automatic" value="1">
                        <label class="form-check-label" for="student_id_automatic">{{ __('messages.general_student_id_automatic') }}</label>
                    </div>

                    <!-- Created By (hidden field, automatically handled) -->
                    <input type="hidden" name="created_by" value="{{ Auth::id() }}">

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