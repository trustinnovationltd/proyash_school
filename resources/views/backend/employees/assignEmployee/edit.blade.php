{{-- filepath: resources/views/backend/employees/assignEmployee/create.blade.php --}}
@extends('backend.layouts.master')
@section('title', isset($assignEmployee) ? 'Edit Assign Employee' : 'Add Assign Employee')
@section('main_menu', 'Home')
@section('active_menu', 'Employee Management')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ isset($assignEmployee) ? 'Edit Assign Employee' : 'Add Assign Employee' }}
                    </h3>
                </div>
                <form method="POST"
                    action="{{ isset($assignEmployee) ? route('assign-employee.update', $assignEmployee->id) : route('assign-employee.store') }}">
                    @csrf
                    @if (isset($assignEmployee))
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-3">
                                <label>Employee <span class="text-danger">*</span></label>
                                <select name="employee_id" class="form-control" required>
                                    <option value="">Select Employee</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}"
                                            {{ old('employee_id', $assignEmployee->employee_id ?? '') == $employee->id ? 'selected' : '' }}>
                                            {{ $employee->name_english }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <label>Section <span class="text-danger">*</span></label>
                                <select name="section_id" class="form-control" required>
                                    <option value="">Select Section</option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}"
                                            {{ old('section_id', $assignEmployee->section_id ?? '') == $section->id ? 'selected' : '' }}>
                                            {{ $section->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('section_id') }}</span>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <label>Designation <span class="text-danger">*</span></label>
                                <select name="designation_id" class="form-control" required>
                                    <option value="">Select Designation</option>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}"
                                            {{ old('designation_id', $assignEmployee->designation_id ?? '') == $designation->id ? 'selected' : '' }}>
                                            {{ $designation->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('designation_id') }}</span>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <label>Start Date <span class="text-danger">*</span></label>
                                <input type="date" name="start_date" class="form-control"
                                    value="{{ old('start_date', $assignEmployee->start_date ?? '') }}" required>
                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control"
                                    value="{{ old('end_date', $assignEmployee->end_date ?? '') }}">
                                <span class="text-danger">{{ $errors->first('end_date') }}</span>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <label>Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control" required>
                                    <option value="1"
                                        {{ old('status', $assignEmployee->status ?? '') == '1' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="2"
                                        {{ old('status', $assignEmployee->status ?? '') == '2' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="0"
                                        {{ old('status', $assignEmployee->status ?? '') == '0' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            {{ isset($assignEmployee) ? 'Update' : 'Submit' }}
                        </button>
                        <a href="{{ route('assign-employee.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
