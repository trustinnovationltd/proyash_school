@extends('backend.layouts.master')

@section('title', __('messages.add_section'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.section_management'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.add_section') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('sections.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="name">{{ __('messages.name') }} <span>*</span></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{ __('messages.enter_name') }}" autocomplete="off"
                                        value="{{ old('name') }}" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="order">Order <span>*</span></label>
                                    <input type="number" name="order" class="form-control" id="order"
                                        placeholder="Enter order" autocomplete="off" value="{{ old('order') }}" required>
                                    <span class="text-danger">{{ $errors->first('order') }}</span>
                                </div>
                            </div>


                            <!-- Status -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label>{{ __('messages.status') }}</label>
                                    <select name="status" class="form-select" id="status" required>
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
                        <button type="submit" class="btn btn-primary"
                            id="submitButton">{{ __('messages.submit') }}</button>
                        <a href="{{ route('sections.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
