@extends('backend.layouts.master')
@section('title', __('messages.edit_holiday_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.holiday_settings_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.edit_holiday_setting') }}</h3>
            </div>
            <form action="{{ route('holiday-settings.update', $holidaySetting->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <!-- Institute Selection -->
                        <div class="form-group col-md-3">
                            <label for="institute_id">{{ __('messages.institute') }}</label>
                            <select name="institute_id" id="institute_id" class="form-select">
                                @foreach($institutes as $institute)
                                    <option value="{{ $institute->id }}" {{ $holidaySetting->institute_id == $institute->id ? 'selected' : '' }}>
                                        {{ $institute->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Academic Year Selection -->
                        <div class="form-group col-md-3">
                            <label for="academic_year_id">{{ __('messages.academic_year') }}</label>
                            <select name="academic_year_id" id="academic_year_id" class="form-select">
                                @foreach($academicYears as $academicYear)
                                    <option value="{{ $academicYear->id }}" {{ $holidaySetting->academic_year_id == $academicYear->id ? 'selected' : '' }}>
                                        {{ $academicYear->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Medium Selection -->
                        <div class="form-group col-md-3">
                            <label for="medium_id">{{ __('messages.medium') }}</label>
                            <select name="medium_id" id="medium_id" class="form-select">
                                @foreach($mediums as $medium)
                                    <option value="{{ $medium->id }}" {{ $holidaySetting->medium_id == $medium->id ? 'selected' : '' }}>
                                        {{ $medium->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Holiday Type -->
                        <div class="form-group col-md-3">
                            <label for="holiday_type">{{ __('messages.holiday_type') }}</label>
                            <input type="text" name="holiday_type" id="holiday_type" class="form-control"
                                value="{{ $holidaySetting->holiday_type }}">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Start Date -->
                        <div class="form-group col-md-6">
                            <label for="start_date">{{ __('messages.start_date') }}</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                value="{{ $holidaySetting->start_date }}">
                        </div>

                        <!-- End Date -->
                        <div class="form-group col-md-6">
                            <label for="end_date">{{ __('messages.end_date') }}</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                value="{{ $holidaySetting->end_date }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('messages.description') }}</label>
                        <textarea name="description" id="description" rows="4" class="form-control">{{ $holidaySetting->description }}</textarea>
                    </div>

                    <!-- Status -->
                    <div class="form-group col-md-3">
                        <label for="status">{{ __('messages.status') }}</label>
                        <select name="status" id="status" class="form-select">
                            <option value="1" {{ $holidaySetting->status ? 'selected' : '' }}>{{ __('messages.active') }}</option>
                            <option value="0" {{ !$holidaySetting->status ? 'selected' : '' }}>{{ __('messages.inactive') }}</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                    <a href="{{ route('holiday-settings.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
