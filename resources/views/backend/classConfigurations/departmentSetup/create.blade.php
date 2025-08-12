@extends('backend.layouts.master')
@section('title', __('messages.department_setup'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.department_setup_management'))

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.department_setup_title') }}</h3>
                </div>
                <form id="inputForm" method="POST" action="">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Institute Dropdown -->
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                                    <select name="institute_id" id="institute_id" class="form-select" required>
                                        <option value="" selected>{{ __('messages.select_institute') }}</option>
                                        @foreach ($institutes as $institute)
                                            <option value="{{ $institute->id }}"
                                                {{ old('institute_id') == $institute->id ? 'selected' : '' }}>
                                                {{ $institute->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('institute_id') }}</span>
                                </div>
                            </div>

                            <!-- Medium Dropdown -->
                            <div class="col-md-4 mb-3" id="mediumList">
                                <div class="form-group">
                                    <label for="medium_id">{{ __('messages.medium') }} <span>*</span></label>
                                    <select name="medium_id" id="medium_id" class="form-select" required disabled>
                                        <option value="" selected>{{ __('messages.select_medium') }}</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('medium_id') }}</span>
                                </div>
                            </div>

                            <!-- Class Dropdown -->
                            <div class="col-md-4 mb-3" id="classList">
                                <div class="form-group">
                                    <label for="class_id">{{ __('messages.class') }} <span>*</span></label>
                                    <select name="class_id" id="class_id" class="form-select" required disabled>
                                        <option value="" selected>{{ __('messages.select_class') }}</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('class_id') }}</span>
                                </div>
                            </div>

                            <!-- Classes Table with checkboxes -->
                            <div class="col-md-12 mb-3" id="departmentList" style="display:none;">
                                <div class="form-group">
                                    <label for="classes">{{ __('messages.select_department') }} <span>*</span></label>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>{{ __('messages.serial') }}</th>
                                                <th>{{ __('messages.title') }}</th>
                                                <th>{{ __('messages.status') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="department-table-body"></tbody>
                                    </table>
                                </div>
                            </div>

                            <span class="text-danger">{{ $errors->first('department_ids') }}</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <button type="button" class="btn btn-primary" id="formSubmitBtn">
                                {{ __('messages.submit') }}
                            </button>
                            <button type="button" class="btn btn-danger" onclick="location.reload();">
                                {{ __('messages.reset') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let classSetupUrl = '{{ route('institute_info.get_class_data') }}';
        let fetchMediumUrl = '{{ route('institute_info.get_medium_data', ':id') }}';
        let fetchDepartmentUrl = '{{ route('department_setup.get_department_data') }}';
        let csrfToken = "{{ csrf_token() }}";

        let selectMedium = "{{ __('messages.select_medium') }}";
        let selectClass = "{{ __('messages.select_class') }}";
        $(".card-footer").hide();

        $(document).ready(function() {
            $("#institute_id").on("change", function() {
                $("#departmentList").hide();
                $("#class_id").html(
                    `<option value="" selected>${selectClass}</option>`
                );
                $("#class_id").show().prop("disabled", true);

                var instituteId = $(this).val();

                if (instituteId) {
                    var mediumFetchUrl = fetchMediumUrl.replace(":id", instituteId);

                    $.ajax({
                        url: mediumFetchUrl,
                        type: "GET",
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                $("#medium_id").empty();
                                $("#medium_id").append(
                                    `<option value="" selected>${selectMedium}</option>`
                                );
                                $.each(response.mediums, function(index, medium) {
                                    $("#medium_id").append(
                                        `<option value="${medium.id}">${medium.title}</option>`
                                    );
                                });
                                $("#medium_id").show().prop("disabled", false);
                            } else {
                                $("#medium_id").empty().append(
                                    `<option value="" selected>${selectMedium}</option>`
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            toastr.error("An error occurred while fetching medium data.", "Error");
                        },
                    });
                } else {
                    $("#medium_id").empty().append(
                        `<option value="" selected>${selectMedium}</option>`
                    ).show().prop("disabled", true);
                }
            });

            $("#medium_id").on("change", function() {
                $("#departmentList").hide();
                var mediumId = $(this).val();
                var instituteId = $("#institute_id").val();

                if (mediumId) {
                    $.ajax({
                        url: classSetupUrl,
                        type: "POST",
                        data: {
                            institute_id: instituteId,
                            medium_id: mediumId,
                            _token: csrfToken,
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                $("#class_id").empty().append(
                                    `<option value="" selected>${selectClass}</option>`
                                );
                                $.each(response.classes, function(index, classData) {
                                    $("#class_id").append(
                                        `<option value="${classData.id}">${classData.title}</option>`
                                    );
                                });
                                $("#class_id").show().prop("disabled", false);
                            }
                        },
                        error: function(xhr, status, error) {
                            toastr.error("An error occurred while fetching class data.", "Error");
                        },
                    });
                } else {
                    $("#class_id").empty().append(
                        `<option value="" selected>${selectClass}</option>`
                    ).show().prop("disabled", true);
                }
            });

            $("#class_id").on("change", function() {
                var classId = $(this).val();
                var instituteId = $("#institute_id").val();
                var mediumId = $("#medium_id").val();

                if (classId) {
                    $.ajax({
                        url: fetchDepartmentUrl,
                        type: "POST",
                        data: {
                            institute_id: instituteId,
                            medium_id: mediumId,
                            class_id: classId,
                            _token: csrfToken,
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                $("#department-table-body").empty();
                                $.each(response.departments, function(index, departmentData) {
                                    let isChecked = response.existingDepartmentIds
                                        .map(String)
                                        .includes(String(departmentData.id));
                                    $("#department-table-body").append(
                                        `<tr>
                                            <td>${index + 1}</td>
                                            <td>${departmentData.title}</td>
                                            <td>
                                                <input type="checkbox" name="department_ids[]" value="${departmentData.id}" class="form-check-input" id="class-${departmentData.id}" ${isChecked ? "checked" : ""}>
                                            </td>
                                        </tr>`
                                    );
                                });

                                $("#departmentList").show();
                                $(".card-footer").show();
                            }
                        },
                        error: function(xhr, status, error) {
                            toastr.error("An error occurred while fetching department data.", "Error");
                        },
                    });
                } else {
                    $("#departmentList").hide();
                    $(".card-footer").hide();
                }
            });

            $("#inputForm").on("submit", function(event) {
                var checkedClasses = $("input[name='department_ids[]']:checked").length;

                if (checkedClasses === 0) {
                    event.preventDefault();
                    Swal.fire({
                        icon: "warning",
                        title: "Please select at least one class!",
                        text: "You must select at least one class before submitting.",
                        confirmButtonColor: "#d33",
                        confirmButtonText: "OK"
                    });
                }
            });

            $("#formSubmitBtn").on("click", function() {
                $(this).attr('disabled', true);
                var formData = new FormData($('#inputForm')[0]);

                $.ajax({
                    url: '{{ route('department_setup.store') }}',
                    data: formData,
                    type: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Success!",
                            text: response.message_en,
                            icon: "success",
                            confirmButtonText: "OK"
                        });
                    },
                    error: function(xhr) {
                        let errorMessage = "Something went wrong!";
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errorMessage = Object.values(xhr.responseJSON.errors).join("\n");
                        }
                        toastr.error(errorMessage, "Error", {
                            closeButton: true,
                            progressBar: true,
                            timeOut: 5000
                        });
                    },
                    complete: function() {
                        $("#formSubmitBtn").attr('disabled', false);
                    }
                });
            });
        });
    </script>
@endsection
