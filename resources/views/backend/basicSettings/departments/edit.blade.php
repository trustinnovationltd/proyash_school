@extends('backend.layouts.master')
@section('title', __('messages.edit_department'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.department_management'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.edit_department') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('departments.update', $department->id) }}">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating -->
                    <div class="card-body">
                        <div class="row">
                            <!-- Title -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="title">{{ __('messages.title') }} <span>*</span></label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Enter title" autocomplete="off"
                                        value="{{ old('title', $department->title) }}">
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="description">{{ __('messages.description') }}</label>
                                    <textarea name="description" class="form-control" id="description" placeholder="Enter description">{{ old('description', $department->description) }}</textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('messages.status') }}</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ old('status', $department->status) == 1 ? 'selected' : '' }}>
                                            {{ __('messages.active') }}
                                        </option>
                                        <option value="0" {{ old('status', $department->status) == 0 ? 'selected' : '' }}>
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
                        <a href="{{ route('departments.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
