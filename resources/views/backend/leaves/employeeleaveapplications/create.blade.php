@extends('backend.layouts.master')

@section('title', __('messages.add_leave_application'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.leave_application_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_leave_application') }}</h3>
            </div>
            <!-- form start -->
            <form method="POST" action="{{ route('leave-applications.store') }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- Institute -->
                        <div class="col-md-4 mb-3">
                            <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                            <select name="institute_id" class="form-select" id="institute_id" required>
                                <option value="" disabled selected>{{ __('messages.select_institute') }}</option>
                                @foreach($institutes as $institute)
                                <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Designation -->
                        <div class="col-md-4 mb-3">
                            <label for="designation_id">{{ __('messages.designation') }} <span>*</span></label>
                            <select name="designation_id" class="form-select" id="designation_id" required>
                                <option value="" disabled selected>{{ __('messages.select_designation') }}</option>
                            </select>
                        </div>

                        <!-- Employee (Filtered by Institute + Designation) -->
                        <div class="col-md-4 mb-3">
                            <label for="employee_id">{{ __('messages.employee') }} <span>*</span></label>
                            <select name="employee_id" class="form-select" id="employee_id" required>
                                <option value="" disabled selected>{{ __('messages.select_employee') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Leave Type -->
                        <div class="col-md-6 mb-3">
                            <label for="leave_type">{{ __('messages.leave_type') }} <span>*</span></label>
                            <input type="text" name="leave_type" class="form-control" id="leave_type" placeholder="{{ __('messages.enter_leave_type') }}" value="{{ old('leave_type') }}" required>
                        </div>

                        <!-- Pay Type -->
                        <div class="col-md-6 mb-3">
                            <label for="pay_type">{{ __('messages.pay_type') }} <span>*</span></label>
                            <input type="text" name="pay_type" class="form-control" id="pay_type" placeholder="{{ __('messages.enter_pay_type') }}" value="{{ old('pay_type') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Leave Application Date -->
                        <div class="col-md-4 mb-3">
                            <label for="leave_application_date">{{ __('messages.leave_application_date') }} <span>*</span></label>
                            <input type="date" name="leave_application_date" class="form-control" id="leave_application_date" required>
                        </div>

                        <!-- Leave From -->
                        <div class="col-md-4 mb-3">
                            <label for="leave_from">{{ __('messages.leave_from') }} <span>*</span></label>
                            <input type="date" name="leave_from" class="form-control" id="leave_from" required>
                        </div>

                        <!-- Leave To -->
                        <div class="col-md-4 mb-3">
                            <label for="leave_to">{{ __('messages.leave_to') }} <span>*</span></label>
                            <input type="date" name="leave_to" class="form-control" id="leave_to" required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Leave Reason -->
                        <div class="col-md-12 mb-3">
                            <label for="leave_reason">{{ __('messages.leave_reason') }} <span>*</span></label>
                            <textarea name="leave_reason" class="form-control" id="leave_reason" rows="3" placeholder="{{ __('messages.enter_leave_reason') }}" value="{{ old('leave_reason') }}" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Emergency Contact Number -->
                        <div class="col-md-6 mb-3">
                            <label for="emergency_contact_number">{{ __('messages.emergency_contact_number') }} <span>*</span></label>
                            <input type="text" name="emergency_contact_number" class="form-control" id="emergency_contact_number" placeholder="{{ __('messages.enter_emergency_contact_number') }}" value="{{ old('emergency_contact_number') }}" required>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label>{{ __('messages.status') }}</label>
                            <select name="status" class="form-select" required>
                                <option value="" disabled selected>{{ __('messages.select_status') }}</option>
                                <option value="1">{{ __('messages.active') }}</option>
                                <option value="0">{{ __('messages.inactive') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.submit') }}</button>
                    <a href="{{ route('leave-applications.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Dynamic Filtering -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Load designations based on selected institute
        $('#institute_id').on('change', function() {
            let instituteId = $(this).val();
            let designationDropdown = $('#designation_id');
            let employeeDropdown = $('#employee_id');

            if (instituteId) {
                $.ajax({
                    url: "{{ route('getDesignationsByInstitute') }}",
                    type: "GET",
                    data: {
                        institute_id: instituteId
                    },
                    success: function(response) {
                        designationDropdown.empty().append('<option value="" selected disabled>{{ __("messages.select_designation") }}</option>');
                        $.each(response.designations, function(key, designation) {
                            designationDropdown.append(`<option value="${designation.id}">${designation.name}</option>`);
                        });

                        employeeDropdown.empty().append('<option value="" selected disabled>{{ __("messages.select_employee") }}</option>');
                    }
                });
            }
        });

        // Load employees based on selected institute & designation
        $('#designation_id').on('change', function() {
            let instituteId = $('#institute_id').val();
            let designationId = $(this).val();
            let employeeDropdown = $('#employee_id');

            if (instituteId && designationId) {
                $.ajax({
                    url: "{{ route('getEmployeesByInstituteAndDesignation') }}",
                    type: "GET",
                    data: {
                        institute_id: instituteId,
                        designation_id: designationId
                    },
                    success: function(response) {
                        employeeDropdown.empty().append('<option value="" selected disabled>{{ __("messages.select_employee") }}</option>');
                        $.each(response.employees, function(key, employee) {
                            employeeDropdown.append(`<option value="${employee.id}">${employee.name_english}</option>`);
                        });
                    }
                });
            }
        });
    });
</script>
@endsection