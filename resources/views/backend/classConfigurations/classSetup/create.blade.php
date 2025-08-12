@extends('backend.layouts.master')

@section('title', __('messages.class_setup'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.class_setup_management'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('messages.class_setup') }}</h3>
                </div>
                <!-- form start -->
                <form id="inputForm" method="POST" action="{{ route('class_setup.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <!-- Institute Dropdown -->
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="institute_id">{{ __('messages.institute') }} <span>*</span></label>
                                    <select name="institute_id" id="institute_id" class="form-select" required>
                                        <option value="" selected>{{ __('messages.select_institute') }}</option>
                                        @if ($institutes)
                                            @foreach ($institutes as $institute)
                                                <option value="{{ $institute->id }}"
                                                    {{ old('institute_id') == $institute->id ? 'selected' : '' }}>
                                                    {{ $institute->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <span class="text-danger error-field" id="error_institute_id"></span>
                                </div>
                            </div>

                            <!-- Medium Dropdown -->
                            <div class="col-md-6 mb-3" id="mediumList">
                                <div class="form-group">
                                    <label for="medium_id">{{ __('messages.medium') }} <span>*</span></label>
                                    <select name="medium_id" id="medium_id" class="form-select" required disabled>
                                        <option value="" selected>{{ __('messages.select_medium') }}</option>
                                    </select>
                                    <span class="text-danger">{{ $errors->first('medium_id') }}</span>
                                </div>
                            </div>

                            <!-- Classes Table with checkboxes -->
                            <div class="col-md-12 mb-3" id="classList" style="display:none;">
                                <div class="form-group">
                                    <label for="classes">{{ __('messages.select_class') }} <span>*</span></label>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>{{ __('messages.serial') }}</th>
                                                <th>{{ __('messages.title') }}</th>
                                                <th>{{ __('messages.status') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="classes-table-body"></tbody>
                                    </table>
                                </div>
                            </div>

                            <span class="text-danger">{{ $errors->first('class_ids') }}</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <button type="submit" class="btn btn-primary" id="formSubmitBtn">
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
        var classSetupUrl = '{{ route('class_setup.get_class_data') }}';
        var fetchMediumUrl = '{{ route('institute_info.get_medium_data', ':id') }}';
        var selectMedium = "{{ __('messages.select_medium') }}";
        var noMediumFound = "{{ __('messages.no_medium_found') }}";
        $(".card-footer").hide();

        $(document).ready(function() {
            // Fetch medium once the institute is selected
            $("#institute_id").on("change", function() {
                $(".card-footer").hide();
                var instituteId = $(this).val();

                if (instituteId) {
                    // Fetch mediums based on the selected institute
                    var mediumUrl = fetchMediumUrl.replace(":id", instituteId);
                    $.ajax({
                        url: mediumUrl,
                        type: "GET",
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                $("#medium_id").empty();
                                // Add a default option
                                $("#medium_id").append(
                                    `<option value="" selected>${selectMedium}</option>`
                                );

                                // Populate the Medium dropdown with new options
                                $.each(response.mediums, function(index, medium) {
                                    $("#medium_id").append(
                                        '<option value="' + medium.id + '">' + medium.title + "</option>"
                                    );
                                });

                                // Show the Classes list once mediums are populated
                                $("#medium_id").prop("disabled", false);
                            } else {
                                // Handle the case where no mediums are found
                                $("#medium_id").empty();
                                $("#medium_id").append(
                                    `<option value="" selected>${noMediumFound}</option>`
                                );
                                $("#medium_id").prop("disabled", true);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + error);
                        },
                    });
                } else {
                    // Reset the medium dropdown
                    $("#medium_id").empty();
                    $("#medium_id").append(
                        `<option value="" selected>${selectMedium}</option>`
                    );

                    // Hide class list when no institute is selected
                    $("#classList").hide();
                    $("#medium_id").prop("disabled", true);
                }
            });

            // Fetch classes once the medium is selected
            $("#medium_id").on("change", function() {
                var mediumId = $(this).val();
                var instituteId = $("#institute_id").val();

                if (mediumId) {
                    $.ajax({
                        url: classSetupUrl,
                        type: "POST",
                        data: {
                            institute_id: instituteId,
                            medium_id: mediumId,
                            _token: $('meta[name="csrf-token"]').attr('content'),
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                // Display the classes in a table with checkboxes
                                $("#classes-table-body").empty();

                                $.each(response.classes, function(index, classData) {
                                    let isChecked = response.existingClassIds
                                        .map(String)
                                        .includes(String(classData.id));
                                    // Append the row to the table body
                                    $("#classes-table-body").append(
                                        "<tr>" +
                                        "<td>" + (index + 1) + "</td>" +
                                        "<td>" + classData.title + "</td>" +
                                        "<td>" + 
                                        '<input type="checkbox" name="class_ids[]" value="' + 
                                        classData.id + '" class="form-check-input" id="class-' +
                                        classData.id + '"' + (isChecked ? " checked" : "") + ">" +
                                        "</td>" +
                                        "</tr>"
                                    );
                                });

                                $("#classList").show();
                                $(".card-footer").show();
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + error);
                        },
                    });
                } else {
                    $("#classList").hide();
                    $(".card-footer").hide();
                }
            });

            // Minimum 1 item selected 
            $("#inputForm").on("submit", function(event) {
                var checkedClasses = $("input[name='class_ids[]']:checked").length;

                if (checkedClasses === 0) {
                    event.preventDefault(); // Prevent form submission
                    Swal.fire({
                        icon: "warning",
                        title: "Please select at least one class!",
                        text: "You must select at least one class before submitting.",
                        confirmButtonColor: "#d33",
                        confirmButtonText: "OK"
                    });
                }
            });

            // Store Form Data
            $("#formSubmitBtn").on("click", function() {
                $(this).attr('disabled', true);
                var formData = new FormData($('#inputForm')[0]);

                $.ajax({
                    url: '{{ route('class_setup.store') }}',
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
                            text: response.message_en,
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
