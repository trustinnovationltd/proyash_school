@extends('backend.layouts.master')

@section('title', __('messages.edit_designation'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.designation_management'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.edit_designation') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('designations.update', $designation->id) }}">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating -->
                    <div class="card-body">
                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="name">{{ __('messages.name') }} <span>*</span></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{ __('messages.enter_name') }}" autocomplete="off"
                                        value="{{ old('name', $designation->name) }}" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="order">{{ __('messages.order') }} <span>*</span></label>
                                    <input type="number" name="order" class="form-control" id="order"
                                        placeholder="{{ __('messages.enter_order') }}" autocomplete="off"
                                        value="{{ old('order', $designation->order) }}" required>
                                    <span class="text-danger">{{ $errors->first('order') }}</span>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label>{{ __('messages.status') }}</label>
                                    <select name="status" class="form-control" required>
                                        <option value="1"
                                            {{ old('status', $designation->status) == 1 ? 'selected' : '' }}>
                                            {{ __('messages.active') }}
                                        </option>
                                        <option value="0"
                                            {{ old('status', $designation->status) == 0 ? 'selected' : '' }}>
                                            {{ __('messages.inactive') }}
                                        </option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                        <a href="{{ route('designations.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
