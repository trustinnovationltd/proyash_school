@extends('backend.layouts.master')
@section('title', __('messages.edit_subject'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.subject_management'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.edit_subject') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('subjects.update', $subject->id) }}">
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
                                        value="{{ old('title', $subject->title) }}">
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                            </div>

                            <!-- code -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="code">{{ __('messages.code') }} <span></span></label>
                                    <input type="text" name="code" class="form-control" id="code"
                                        placeholder="Enter code" autocomplete="off"
                                        value="{{ old('code', $subject->code) }}">
                                    <span class="text-danger">{{ $errors->first('code') }}</span>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="description">{{ __('messages.description') }}</label>
                                    <textarea name="description" class="form-control" id="description" placeholder="Enter description">{{ old('description', $subject->description) }}</textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{ __('messages.status') }}</label>
                                    <select name="status" class="form-control">
                                        <option value="1"
                                            {{ old('status', $subject->status) == 1 ? 'selected' : '' }}>
                                            {{ __('messages.active') }}
                                        </option>
                                        <option value="0"
                                            {{ old('status', $subject->status) == 0 ? 'selected' : '' }}>
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
                        <a href="{{ route('subjects.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
