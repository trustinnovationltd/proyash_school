@extends('backend.layouts.master')

@section('title', __('messages.add_student_leave_application'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.leave_application_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_student_leave_application') }}</h3>
            </div>
            <form method="POST" action="{{ route('student-leave-applications.store') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        @php
                        $fields = [
                        ['institute_id', 'institute', $institutes, 'name'],
                        ['academic_year_id', 'academic_year', $academicYears, 'title'],
                        ['medium_id', 'medium', $mediums, 'title'],
                        ['shift_id', 'shift', $shifts, 'title'],
                        ['class_id', 'class', $classes, 'title'],
                        ['department_id', 'department', $departments, 'title'],
                        ['section_setup_id', 'section', $sections, 'name'],
                        ['student_id', 'students', $students, 'name_english', 'roll_number'],
                        ];
                        @endphp

                        @foreach ($fields as $field)
                        <div class="col-md-4 mb-3">
                            <label for="{{ $field[0] }}">{{ __('messages.' . $field[1]) }} <span>*</span></label>
                            <select name="{{ $field[0] }}" class="form-select" id="{{ $field[0] }}" required>
                                <option value="" disabled selected>{{ __('messages.select_' . $field[1]) }}</option>
                                @foreach($field[2] as $item)
                                <option value="{{ $item->id }}" {{ old($field[0]) == $item->id ? 'selected' : '' }}>
                                    {{ isset($field[4]) ? $item->{$field[4]} . ' - ' . $item->{$field[3]} : $item->{$field[3]} }}
                                </option>
                                @endforeach
                            </select>
                            @error($field[0])
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @endforeach

                        <div class="col-md-4 mb-3">
                            <label for="emergency_contact_number">{{ __('messages.emergency_contact_number') }} <span>*</span></label>
                            <input type="text" name="emergency_contact_number" class="form-control" id="emergency_contact_number" placeholder="{{ __('messages.enter_emergency_contact_number') }}" value="{{ old('emergency_contact_number') }}" required>
                            @error('emergency_contact_number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="leave_type">{{ __('messages.leave_type') }} <span>*</span></label>
                            <input type="text" name="leave_type" class="form-control" id="leave_type" placeholder="{{ __('messages.enter_leave_type') }}" value="{{ old('leave_type') }}" required>
                            @error('leave_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="leave_application_date">{{ __('messages.leave_application_date') }} <span>*</span></label>
                            <input type="date" name="leave_application_date" class="form-control" id="leave_application_date" value="{{ old('leave_application_date') }}" required>
                            @error('leave_application_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="leave_from">{{ __('messages.leave_from') }} <span>*</span></label>
                            <input type="date" name="leave_from" class="form-control" id="leave_from" value="{{ old('leave_from') }}" required>
                            @error('leave_from') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="leave_to">{{ __('messages.leave_to') }} <span>*</span></label>
                            <input type="date" name="leave_to" class="form-control" id="leave_to" value="{{ old('leave_to') }}" required>
                            @error('leave_to') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="approved_by">{{ __('messages.approved_by') }}</label>
                            <select name="approved_by" class="form-select" id="approved_by">
                                <option value="" disabled selected>{{ __('messages.select_employee') }}</option>
                                @foreach($employees as $employee)
                                <option value="{{ $employee->id }}" {{ old('approved_by') == $employee->id ? 'selected' : '' }}>
                                    {{ $employee->teachers_id }} - {{ $employee->name_english }}
                                </option>
                                @endforeach
                            </select>
                            @error('approved_by')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-4 mb-3">
                            <label for="approved_date_from">{{ __('messages.approved_date_from') }}</label>
                            <input type="date" name="approved_date_from" class="form-control" id="approved_date_from" value="{{ old('approved_date_from') }}">
                            @error('approved_date_from')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="approved_date_to">{{ __('messages.approved_date_to') }}</label>
                            <input type="date" name="approved_date_to" class="form-control" id="approved_date_to" value="{{ old('approved_date_to') }}">
                            @error('approved_date_to')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="leave_reason">{{ __('messages.leave_reason') }} <span>*</span></label>
                            <textarea name="leave_reason" class="form-control" id="leave_reason" placeholder="{{ __('messages.enter_leave_reason') }}" rows="3" required>{{ old('leave_reason') }}</textarea>
                            @error('leave_reason') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>{{ __('messages.status') }}</label>
                            <select name="status" class="form-select" required>
                                <option value="" disabled selected>{{ __('messages.select_status') }}</option>
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>{{ __('messages.active') }}</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>{{ __('messages.inactive') }}</option>
                            </select>
                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('student-leave-applications.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
