@extends('backend.layouts.master')
@section('title', __('messages.add_shift'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.shift_management'))

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_shift') }}</h3>
            </div>
            <!-- form start -->
            <form id="inputForm" method="POST" action="{{ route('shifts.store') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- Title -->
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="title">{{ __('messages.title') }} <span>*</span></label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Enter title" autocomplete="off" value="{{ old('title') }}">
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="description">{{ __('messages.description') }}</label>
                                <textarea name="description" class="form-control" id="description" placeholder="Enter description">{{ old('description') }}</textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
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
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('shifts.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection