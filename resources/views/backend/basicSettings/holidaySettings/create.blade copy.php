@extends('backend.layouts.master')
@section('title', __('messages.add_holiday_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.holiday_settings_management'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_holiday_setting') }}</h3>
            </div>
            <form action="{{ route('holiday-settings.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <!-- Institute Selection -->
                    <div class="form-group">
                        <label for="institute_id">{{ __('messages.institute') }}</label>
                        <select name="institute_id" id="institute_id" class="form-control">
                            <option value="">{{ __('messages.select_institute') }}</option>
                            @foreach($institutes as $institute)
                                <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Academic Year Selection -->
                    <div class="form-group">
                        <label for="academic_year_id">{{ __('messages.academic_year') }}</label>
                        <select name="academic_year_id" id="academic_year_id" class="form-control">
                            <option value="">{{ __('messages.select_academic_year') }}</option>
                            @foreach($academicYears as $academicYear)
                                <option value="{{ $academicYear->id }}">{{ $academicYear->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Medium Selection -->
                    <div class="form-group">
                        <label for="medium_id">{{ __('messages.medium') }}</label>
                        <select name="medium_id" id="medium_id" class="form-control">
                            <option value="">{{ __('messages.select_medium') }}</option>
                            @foreach($mediums as $medium)
                                <option value="{{ $medium->id }}">{{ $medium->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Holiday Type -->
                    <div class="form-group">
                        <label for="holiday_type">{{ __('messages.enter_holiday_type') }}</label>
                        <input type="text" name="holiday_type" id="holiday_type" class="form-control"
                            placeholder="Enter Holiday Type">
                    </div>

                    <!-- Start Date -->
                    <div class="form-group">
                        <label for="start_date">{{ __('messages.start_date') }}</label>
                        <input type="date" name="start_date" id="start_date" class="form-control">
                    </div>

                    <!-- End Date -->
                    <div class="form-group">
                        <label for="end_date">{{ __('messages.end_date') }}</label>
                        <input type="date" name="end_date" id="end_date" class="form-control">
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">{{ __('messages.description') }}</label>
                        <textarea name="description" id="description" rows="4" class="form-control"
                            placeholder="Enter Description"></textarea>
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label for="status">{{ __('messages.status') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected>{{ __('messages.active') }}</option>
                            <option value="0">{{ __('messages.inactive') }}</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('institutes.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



















<!-- 2nd modified -->

@extends('backend.layouts.master')
@section('title', __('messages.add_holiday_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.holiday_settings_management'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_holiday_setting') }}</h3>
            </div>
            <form action="{{ route('holiday-settings.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- Institute Selection -->
                        <div class="form-group col-md-3">
                            <label for="institute_id">{{ __('messages.institute') }}</label>
                            <select name="institute_id" id="institute_id" class="form-control">
                                <option value="">{{ __('messages.select_institute') }}</option>
                                @foreach($institutes as $institute)
                                    <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Academic Year Selection -->
                        <div class="form-group col-md-3">
                            <label for="academic_year_id">{{ __('messages.academic_year') }}</label>
                            <select name="academic_year_id" id="academic_year_id" class="form-control">
                                <option value="">{{ __('messages.select_academic_year') }}</option>
                                @foreach($academicYears as $academicYear)
                                    <option value="{{ $academicYear->id }}">{{ $academicYear->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Medium Selection -->
                        <div class="form-group col-md-3">
                            <label for="medium_id">{{ __('messages.medium') }}</label>
                            <select name="medium_id" id="medium_id" class="form-control">
                                <option value="">{{ __('messages.select_medium') }}</option>
                                @foreach($mediums as $medium)
                                    <option value="{{ $medium->id }}">{{ $medium->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Holiday Type -->
                        <div class="form-group col-md-3">
                            <label for="holiday_type">{{ __('messages.enter_holiday_type') }}</label>
                            <input type="text" name="holiday_type" id="holiday_type" class="form-control"
                                placeholder="Enter Holiday Type">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Start Date -->
                        <div class="form-group col-md-6">
                            <label for="start_date">{{ __('messages.start_date') }}</label>
                            <input type="date" name="start_date" id="start_date" class="form-control">
                        </div>

                        <!-- End Date -->
                        <div class="form-group col-md-6">
                            <label for="end_date">{{ __('messages.end_date') }}</label>
                            <input type="date" name="end_date" id="end_date" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('messages.description') }}</label>
                        <textarea name="description" id="description" rows="4" class="form-control"
                            placeholder="Enter Description"></textarea>
                    </div>

                    <!-- Status -->
                    <div class="form-group col-md-1">
                        <label for="status">{{ __('messages.status') }}</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected>{{ __('messages.active') }}</option>
                            <option value="0">{{ __('messages.inactive') }}</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('institutes.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
