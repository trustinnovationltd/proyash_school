@extends('backend.layouts.master')
@section('title', __('messages.edit_event_setting'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.event_settings_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">{{ __('messages.edit_event_setting') }}</h3>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('event-settings.update', $eventSetting->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">{{ __('messages.title') }}</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $eventSetting->title }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">{{ __('messages.description') }}</label>
                            <textarea name="description" id="description"
                                class="form-control">{{ $eventSetting->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="start_date">{{ __('messages.start_date') }}</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                value="{{ $eventSetting->start_date }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end_date">{{ __('messages.end_date') }}</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                value="{{ $eventSetting->end_date }}" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="start_time">{{ __('messages.start_time') }}</label>
                            <input type="time" name="start_time" id="start_time" class="form-control"
                                value="{{ $eventSetting->start_time }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end_time">{{ __('messages.end_time') }}</label>
                            <input type="time" name="end_time" id="end_time" class="form-control"
                                value="{{ $eventSetting->end_time }}" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!-- Class Status -->
                        <div class="form-group col-md-6 d-flex align-items-center">
                            <label for="class_status"
                                class="form-check-label me-2">{{ __('messages.class_status') }}</label>
                            <div class="form-check form-switch">
                                <!-- Hidden field to submit default value when checkbox is unchecked -->
                                <input type="hidden" name="class_status" value="0">
                                <input class="form-check-input" type="checkbox" name="class_status" id="class_status"
                                    value="1" {{ $eventSetting->class_status ? 'checked' : '' }}>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="form-group col-md-6">
                            <label for="status">{{ __('messages.status') }}</label>
                            <select name="status" id="status" class="form-select">
                                <option value="1" {{ $eventSetting->status == 1 ? 'selected' : '' }}>
                                    {{ __('messages.active') }}
                                </option>
                                <option value="0" {{ $eventSetting->status == 0 ? 'selected' : '' }}>
                                    {{ __('messages.inactive') }}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                    <a href="{{ route('event-settings.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection