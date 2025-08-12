@extends('backend.layouts.master')
@section('title', __('messages.subject_setup'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.subject_setup_management'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.subject_setup_title') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Institute Dropdown -->
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                                    <select name="institute_id" id="institute_id" class="form-select" required>
                                        <option value="" selected>{{ __('messages.select_institute') }}
                                        </option>
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
                            <div class="col-md-3 mb-3" id="mediumList">
                                <div class="form-group">
                                    <label for="medium_id">{{ __('messages.medium') }} <span>*</span></label>
                                    <select name="medium_id" id="medium_id" class="form-select" required disabled>
                                        <option value="" selected>{{ __('messages.select_medium') }}</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('medium_id') }}</span>
                                </div>
                            </div>

                            <!-- Class Dropdown -->
                            <div class="col-md-3 mb-3" id="classList">
                                <div class="form-group">
                                    <label for="class_id">{{ __('messages.class') }} <span>*</span></label>
                                    <select name="class_id" id="class_id" class="form-select" required disabled>
                                        <option value="" selected>{{ __('messages.select_class') }}
                                        </option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('class_id') }}</span>
                                </div>
                            </div>

                            <!-- Department Dropdown -->
                            <div class="col-md-3 mb-3" id="departmentList">
                                <div class="form-group">
                                    <label for="department_id">{{ __('messages.department') }} <span>*</span></label>
                                    <select name="department_id" id="department_id" class="form-select" required disabled>
                                        <option value="" selected>{{ __('messages.select_department') }}
                                        </option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('department_id') }}</span>
                                </div>
                            </div>

                            <!-- Classes Table with checkboxes -->
                            <div class="col-md-12 mb-3" id="subjectList" style="display:none;">
                                <div class="form-group">
                                    <label for="classes">{{ __('messages.select_subject') }} <span>*</span></label>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>{{ __('messages.serial') }}</th>
                                                <th>{{ __('messages.title') }}</th>
                                                <th>{{ __('messages.status') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="subject-table-body"></tbody>
                                    </table>

                                </div>
                            </div>

                            <span class="text-danger">{{ $errors->first('subject_ids') }}</span>
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
        let fetchSubjectUrl = '{{ route('subject_setup.get_subject_data') }}';

        let selectMedium = "{{ __('messages.select_medium') }}";
        let selectClass = "{{ __('messages.select_class') }}";
        $(".card-footer").hide();

        $(document).ready(function() {

            $("#institute_id").on("change", function() {
                // Hide the subject list
                $("#subjectList").hide();
                $("#class_id").html(
                    `<option value="" selected>${selectClass}</option>`
                );
                $("#class_id").show().prop("disabled", true);

                // Get selected institute ID
                var instituteId = $(this).val();

                if (instituteId) {
                    var mediumFetchUrl = fetchMediumUrl.replace(":id", instituteId);

                    // Fetch mediums for the selected institute
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
                                // Populate the Medium dropdown
                                $.each(response.mediums, function(index, medium) {
                                    $("#medium_id").append(
                                        `<option value="${medium.id}">${medium.title}</option>`
                                    );
                                });

                                // Show the medium dropdown
                                $("#medium_id").show().prop("disabled", false);
                            } else {
                                // No mediums found
                                $("#medium_id").append(
                                    `<option value="" selected>${selectMedium}</option>`
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + error);
                        },
                    });
                } else {
                    $("#medium_id").append(
                        `<option value="" selected>${selectMedium}</option>`
                    );
                    $("#medium_id").show().prop("disabled", true);
                }
            });

            // Fetch classes once the medium is selected
            $("#medium_id").on("change", function() {
                $("#subjectList").hide();
                var mediumId = $(this).val();
                var instituteId = $("#institute_id").val();

                if (mediumId) {
                    $.ajax({
                        url: classSetupUrl,
                        type: "POST",
                        data: {
                            institute_id: instituteId,
                            medium_id: mediumId,
                            _token: csrf,
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                // Clear and populate the class dropdown
                                $("#class_id").empty();
                                $("#class_id").append(
                                    `<option value="" selected>${selectClass}</option>`
                                );

                                $.each(response.classes, function(index, classData) {
                                    console.log(response.classes);
                                    $("#class_id").append(
                                        `<option value="${classData.id}">${classData.title}</option>`
                                    );
                                });
                                $("#class_id").show().prop("disabled", false);
                            } else {
                                // No mediums found
                                $("#class_id").append(
                                    `<option value="" selected>${selectClass}</option>`
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + error);
                        },
                    });
                } else {
                    $("#class_id").append(
                        `<option value="" selected>${selectClass}</option>`
                    );
                    $("#class_id").show().prop("disabled", true);
                }
            });

            // Fetch subjects once the department is selected
            $("#class_id").on("change", function() {
                var classId = $(this).val();
                var instituteId = $("#institute_id").val();
                var mediumId = $("#medium_id").val();

                if (classId) {
                    $.ajax({
                        url: fetchDepartmentUrl, // Adjust the URL to your route
                        type: "POST",
                        data: {
                            institute_id: instituteId,
                            medium_id: mediumId,
                            class_id: classId,
                            _token: csrf, // CSRF token for Laravel
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                // Display the classes in a table with checkboxes
                                $("#subject-table-body").empty();

                                $.each(response.subjects, function(index, subjectData) {
                                    let isChecked = response.existingSubjectIds
                                        .map(String)
                                        .includes(String(subjectData.id));
                                    // Append the row to the table body
                                    $("#subject-table-body").append(
                                        "<tr>" +
                                        "<td>" +
                                        (index + 1) +
                                        "</td>" +
                                        "<td>" +
                                        subjectData.title +
                                        "</td>" +
                                        "<td>" +
                                        '<input type="checkbox" name="subject_ids[]" value="' +
                                        subjectData.id +
                                        '" class="form-check-input" id="class-' +
                                        subjectData.id +
                                        '"' +
                                        (isChecked ? " checked" : "") +
                                        // Auto-select the checkbox if the ID exists
                                        ">" +
                                        "</td>" +
                                        "</tr>"
                                    );
                                });

                                $("#subjectList").show();
                                $(".card-footer").show();
                            } else {
                                alert(response.message || "No classes found.");
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + error);
                        },
                    });
                } else {
                    $("#subjectList").hide();
                    $(".card-footer").hide();
                }
            });

            // Minimum 1 item selected 
            $("#inputForm").on("submit", function(event) {
                var checkedClasses = $("input[name='subject_ids[]']:checked").length;

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

            //Store Form Data
            $("#formSubmitBtn").on("click", function() {
                $(this).attr('disabled', true);
                var formData = new FormData($('#inputForm')[0]);
                var formSubmitUrl = '{{ route('subject_setup.store') }}';

                $.ajax({
                    url: formSubmitUrl,
                    data: formData,
                    type: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        Swal.fire({
                            title: "Success!",
                            text: response
                                .message_en,
                            icon: "success",
                            confirmButtonText: "OK"
                        })
                    },
                    error: function(xhr) {
                        let errorMessage = "Something went wrong!";

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            errorMessage = Object.values(xhr.responseJSON.errors)
                                .join("\n");
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
