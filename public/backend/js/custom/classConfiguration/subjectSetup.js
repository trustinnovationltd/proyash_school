$(document).ready(function () {
    // Fetch medium once the institute is selected
    // Triggered when the institute dropdown value changes
    $("#institute_id").on("change", function () {
        // Hide the classes list
        $("#medium-list").hide();
        $("#subject-list").hide();
        $("#department-list").hide();
        $("#subject-type-list").hide();
        $("#serial-input").hide();
        $("#class-list").hide();
        $(".card-footer").hide();

        // Get selected institute ID
        var instituteId = $(this).val();

        // Reset medium dropdown and classes section
        $("#medium_id").empty().hide();
        $("#medium_id").append(
            `<option value="" selected disabled>${selectMedium}</option>`
        );

        if (instituteId) {
            // Update fetchMediumUrl dynamically
            var mediumFetchUrl = fetchMediumUrl.replace(":id", instituteId);

            // Fetch mediums for the selected institute
            $.ajax({
                url: mediumFetchUrl,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        $("#medium-list").show();
                        // Populate the Medium dropdown
                        $.each(response.mediums, function (index, medium) {
                            $("#medium_id").append(
                                `<option value="${medium.id}">${medium.title}</option>`
                            );
                        });

                        // Show the medium dropdown
                        $("#medium_id").show().prop("disabled", false);
                    } else {
                        // No mediums found
                        $("#medium_id").append(
                            `<option value="" selected disabled>${noMediumFound}</option>`
                        );
                    }
                },
                error: function (xhr, status, error) {
                    alert("An error occurred: " + error);
                },
            });
        }
    });

    // Fetch classes once the medium is selected
    $("#medium_id").on("change", function () {
        $("#subject-list").hide();
        $("#department-list").hide();
        $("#subject-type-list").hide();
        $("#serial-input").hide();
        $("#class-list").hide();
        $(".card-footer").hide();
        var mediumId = $(this).val();
        var instituteId = $("#institute_id").val();

        if (mediumId) {
            $.ajax({
                url: classSetupUrl, // Adjust the URL to your route
                type: "POST",
                data: {
                    institute_id: instituteId,
                    medium_id: mediumId,
                    _token: csrf, // CSRF token for Laravel
                },
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        // Clear and populate the class dropdown
                        $("#class_id").empty();
                        $("#class_id").append(
                            `<option value="" selected disabled>${selectClass}</option>`
                        );

                        $.each(response.classes, function (index, classData) {

                            $("#class_id").append(
                                `<option value="${classData.id}">${classData.title}</option>`
                            );
                        });

                        // Show the class dropdown
                        $("#class-list").show();
                    } else {
                        alert(response.message || "No classes found.");
                    }
                },
                error: function (xhr, status, error) {
                    alert("An error occurred: " + error);
                },
            });
        }
    });

    // Fetch classes once the medium is selected
    $("#class_id").on("change", function () {
        $("#subject-list").hide();
        $("#department-list").hide();
        $("#subject-type-list").hide();
        $("#serial-input").hide();
        $(".card-footer").hide();
        var classId = $(this).val();
        var instituteId = $("#institute_id").val();
        var mediumId = $("#medium_id").val();

        if (instituteId) {
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
                success: function (response) {
                    if (response.success) {
                        $("#subject-list").show();
                        $("#department-list").show();

                        $("#subject-type-list").show();
                        $("#serial-input").show();

                        // Populate the Medium dropdown
                        $.each(
                            response.departments,
                            function (index, department) {
                                $("#department_id").append(
                                    `<option value="${department.id}">${department.title}</option>`
                                );
                            }
                        );
                        $.each(response.subjects, function (index, subject) {
                            $("#subject_id").append(
                                `<option value="${subject.id}">${subject.title}</option>`
                            );
                        });

                        // Show the medium dropdown
                        $("#department_id").show().prop("disabled", false);
                        $(".card-footer").show();
                    } else {
                        alert(response.message );
                    }
                },
                error: function (xhr, status, error) {
                    alert("An error occurred: " + error);
                },
            });
        }
    });
});
