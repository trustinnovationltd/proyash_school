@extends('backend.layouts.master')
@section('title', __('messages.add_event_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.event_settings_management'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_event_setting') }}</h3>
            </div>
            <form method="POST" action="{{ route('event-settings.store') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- Title -->
                        <div class="form-group col-md-6">
                            <label for="title">{{ __('messages.title') }}</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required>
                        </div>

                        <!-- Description -->
                        <div class="form-group col-md-6">
                            <label for="description">{{ __('messages.description') }}</label>
                            <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!-- Start Date -->
                        <div class="form-group col-md-6">
                            <label for="start_date">{{ __('messages.start_date') }}</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required>
                        </div>

                        <!-- End Date -->
                        <div class="form-group col-md-6">
                            <label for="end_date">{{ __('messages.end_date') }}</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!-- Start Time -->
                        <div class="form-group col-md-6">
                            <label for="start_time">{{ __('messages.start_time') }}</label>
                            <input type="time" name="start_time" id="start_time" class="form-control" required>
                        </div>

                        <!-- End Time -->
                        <div class="form-group col-md-6">
                            <label for="end_time">{{ __('messages.end_time') }}</label>
                            <input type="time" name="end_time" id="end_time" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!-- Class Status -->
                        <div class="form-group col-md-6 d-flex align-items-center mt-3">
                            <label for="class_status"
                                class="form-check-label me-2">{{ __('messages.class_status') }}</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="class_status" id="class_status"
                                    value="1">
                            </div>
                        </div>
                        <!-- Status -->
                        <div class="form-group col-md-6">
                            <label>{{ __('messages.status') }}</label>
                            <select name="status" class="form-select" required>
                                <option value="" disabled selected>{{ __('messages.select_status') }}</option>
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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('event-settings.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection