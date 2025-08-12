@extends('backend.layouts.master')

@section('title', __('messages.edit_leave_application'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.leave_application_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.edit_leave_application') }}</h3>
            </div>
            <!-- form start -->
            <form id="inputForm" method="POST" action="{{ route('leave-applications.update', $leaveApplication->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT method for updating -->
                <div class="card-body">
                    <div class="row">
                        <!-- Institute -->
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                                    <select name="institute_id" class="form-control" id="institute_id" required>
                                        @foreach($institutes as $institute)
                                        <option value="{{ $institute->id }}" {{ old('institute_id', $leaveApplication->institute_id) == $institute->id ? 'selected' : '' }}>
                                            {{ $institute->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('institute_id') }}</span>
                                </div>
                            </div>

                            <!-- Designation -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="designation_id">{{ __('messages.designation') }} <span>*</span></label>
                                    <select name="designation_id" class="form-control" id="designation_id" required>
                                        @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}" {{ old('designation_id', $leaveApplication->designation_id) == $designation->id ? 'selected' : '' }}>
                                            {{ $designation->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('designation_id') }}</span>
                                </div>
                            </div>

                            <!-- Employee -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="employee_id">{{ __('messages.employee') }} <span>*</span></label>
                                    <select name="employee_id" class="form-control" id="employee_id" required>
                                        @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}" {{ old('employee_id', $leaveApplication->employee_id) == $employee->id ? 'selected' : '' }}>
                                            {{ $employee->name_english }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Leave Type -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="leave_type">{{ __('messages.leave_type') }} <span>*</span></label>
                                    <input type="text" name="leave_type" class="form-control" id="leave_type" value="{{ old('leave_type', $leaveApplication->leave_type) }}" required>
                                    <span class="text-danger">{{ $errors->first('leave_type') }}</span>
                                </div>
                            </div>

                            <!-- Pay Type -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="pay_type">{{ __('messages.pay_type') }} <span>*</span></label>
                                    <input type="text" name="pay_type" class="form-control" id="pay_type" value="{{ old('pay_type', $leaveApplication->pay_type) }}" required>
                                    <span class="text-danger">{{ $errors->first('pay_type') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Leave Application Date -->
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="leave_application_date">{{ __('messages.leave_application_date') }} <span>*</span></label>
                                    <input type="date" name="leave_application_date" class="form-control" id="leave_application_date" value="{{ old('leave_application_date', $leaveApplication->leave_application_date) }}" required>
                                    <span class="text-danger">{{ $errors->first('leave_application_date') }}</span>
                                </div>
                            </div>

                            <!-- Leave From -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="leave_from">{{ __('messages.leave_from') }} <span>*</span></label>
                                    <input type="date" name="leave_from" class="form-control" id="leave_from" value="{{ old('leave_from', $leaveApplication->leave_from) }}" required>
                                    <span class="text-danger">{{ $errors->first('leave_from') }}</span>
                                </div>
                            </div>

                            <!-- Leave To -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="leave_to">{{ __('messages.leave_to') }} <span>*</span></label>
                                    <input type="date" name="leave_to" class="form-control" id="leave_to" value="{{ old('leave_to', $leaveApplication->leave_to) }}" required>
                                    <span class="text-danger">{{ $errors->first('leave_to') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Leave Reason -->
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="leave_reason">{{ __('messages.leave_reason') }} <span>*</span></label>
                                    <textarea name="leave_reason" class="form-control" id="leave_reason" rows="3" required>{{ old('leave_reason', $leaveApplication->leave_reason) }}</textarea>
                                    <span class="text-danger">{{ $errors->first('leave_reason') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Contact Number -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="emergency_contact_number">{{ __('messages.emergency_contact_number') }} <span>*</span></label>
                                    <input type="text" name="emergency_contact_number" class="form-control" id="emergency_contact_number" value="{{ old('emergency_contact_number', $leaveApplication->emergency_contact_number) }}" required>
                                    <span class="text-danger">{{ $errors->first('emergency_contact_number') }}</span>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label>{{ __('messages.status') }} <span>*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option value="1" {{ old('status', $leaveApplication->status) == 1 ? 'selected' : '' }}>
                                            {{ __('messages.active') }}
                                        </option>
                                        <option value="0" {{ old('status', $leaveApplication->status) == 0 ? 'selected' : '' }}>
                                            {{ __('messages.inactive') }}
                                        </option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                    <a href="{{ route('leave-applications.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

