// Start:: image upload & drag
function readURL(input, imageSectionTitle) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".image-upload-wrap-" + imageSectionTitle).hide();

            $(".file-upload-image-" + imageSectionTitle).attr(
                "src",
                e.target.result
            );
            $(".file-upload-content-" + imageSectionTitle).show();
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        removeUpload();
    }
}

function removeUpload(imageSectionTitle) {
    $(".file-upload-input-" + imageSectionTitle).replaceWith(
        $(".file-upload-input-" + imageSectionTitle).clone()
    );
    $(".file-upload-input-" + imageSectionTitle).val(null);
    $(".file-upload-content-" + imageSectionTitle).hide();
    $(".image-upload-wrap-" + imageSectionTitle).show();
}

$(".image-upload-wrap").bind("dragover", function () {
    $(".image-upload-wrap").addClass("image-dropping");
});
$(".image-upload-wrap").bind("dragleave", function () {
    $(".image-upload-wrap").removeClass("image-dropping");
});
// End:: image upload & drag

// Start::Edit image upload & drag
function readURLEdit(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".image-upload-wrap-edit").hide();
            $(".file-upload-image-edit").attr("src", e.target.result);
            $(".file-upload-content-edit").show();
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        removeUpload();
    }
}

function removeUploadEdit() {
    $(".file-upload-input-edit").replaceWith(
        $(".file-upload-input-edit").clone()
    );
    $(".file-upload-input-edit").val(null);
    $(".file-upload-content-edit").hide();
    $(".image-upload-wrap-edit").show();
}
$(".image-upload-wrap-edit").bind("dragover", function () {
    $(".image-upload-wrap-edit").addClass("image-dropping-edit");
});
$(".image-upload-wrap-edit").bind("dragleave", function () {
    $(".image-upload-wrap-edit").removeClass("image-dropping-edit");
});
// End::Edit image upload & drag
