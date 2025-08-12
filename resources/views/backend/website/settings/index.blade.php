@extends('backend.layouts.master')
@section('css')
    <style>
        .preview-box {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .preview-box img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
@endsection

@section('title', 'Website Settings')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Website Settings')

@section('content')
    <div class="row">
        @include('backend.layouts.partials.message')
        <div class="card">
            <form action="{{ route('website-settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ $websiteSettings->title ?? '' }}">
                        </div>
                        <div class="col-md-8">
                            <label>Short Description</label>
                            <input type="text" name="short_description" class="form-control"
                                value="{{ $websiteSettings->short_description ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ $websiteSettings->phone ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label>Alternative Phone (1)</label>
                            <input type="text" name="alternative_phone_1" class="form-control"
                                value="{{ $websiteSettings->alternative_phone_1 ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label>Alternative Phone (2)</label>
                            <input type="text" name="alternative_phone_2" class="form-control"
                                value="{{ $websiteSettings->alternative_phone_2 ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ $websiteSettings->email ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label>Alternative Email (1)</label>
                            <input type="email" name="alternative_email_1" class="form-control"
                                value="{{ $websiteSettings->alternative_email_1 ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label>Alternative Email (2)</label>
                            <input type="email" name="alternative_email_2" class="form-control"
                                value="{{ $websiteSettings->alternative_email_2 ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Organization Logo</label>
                                <input class="form-control" type="file" id="organizationLogo" accept="image/*"
                                    name="logo">
                                <div id="organizationLogoPreview" class="mt-3 d-none"></div>
                                <div id="organizationLogoOldPreview" class="mt-2 preview-box">
                                    @if (!empty($websiteSettings->logo))
                                        <img src="{{ asset($websiteSettings->logo) }}" alt="Organization Logo"
                                            class="img-fluid border rounded">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Principle Name</label>
                            <input type="text" name="principle_name" class="form-control"
                                value="{{ $websiteSettings->principle_name ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Principle Image</label>
                                <input class="form-control" type="file" id="principleImage" accept="image/*"
                                    name="principle_image">
                                <div id="principleImagePreview" class="mt-3 d-none"></div>
                                <div id="principleImageOldPreview" class="mt-2 preview-box">
                                    @if (!empty($websiteSettings->principle_image))
                                        <img src="{{ asset($websiteSettings->principle_image) }}" alt="Principle Image"
                                            class="img-fluid border rounded">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label class="form-label">Principle Message</label>
                            <textarea class="form-control" name="principle_message" id="principle_message" class rows="10">{{ $websiteSettings->principle_message ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Facebook Link</label>
                            <input type="text" name="facebook_link" class="form-control"
                                value="{{ $websiteSettings->facebook_link ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label>Youtube Link</label>
                            <input type="text" name="youtube_link" class="form-control"
                                value="{{ $websiteSettings->youtube_link ?? '' }}">
                        </div>
                        <div class="col-md-4">
                            <label>Twitter Link</label>
                            <input type="text" name="twitter_link" class="form-control"
                                value="{{ $websiteSettings->twitter_link ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Linkedin Link</label>
                            <input type="text" name="linkedin_link" class="form-control"
                                value="{{ $websiteSettings->linkedin_link ?? '' }}">
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button class="btn btn-success" type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function setupImagePreview(inputId, previewId, oldPreviewId) {
            const input = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewId);
            const oldPreviewContainer = document.getElementById(oldPreviewId);

            input.addEventListener('change', function() {
                const files = Array.from(this.files);
                previewContainer.innerHTML = '';

                if (files.length > 0) {
                    // Hide old image preview
                    if (oldPreviewContainer) {
                        oldPreviewContainer.style.display = 'none';
                    }

                    previewContainer.classList.remove('d-none');

                    files.forEach((file) => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const col = document.createElement('div');
                            col.classList.add('col-6', 'col-md-4');

                            const previewBox = document.createElement('div');
                            previewBox.classList.add('preview-box', 'position-relative');

                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('img-fluid', 'border', 'rounded');

                            const removeBtn = document.createElement('button');
                            removeBtn.innerHTML = '&times;';
                            removeBtn.classList.add('btn', 'btn-sm', 'btn-danger', 'position-absolute',
                                'top-0', 'end-0');
                            removeBtn.setAttribute('type', 'button');
                            removeBtn.addEventListener('click', () => {
                                input.value = '';
                                previewContainer.innerHTML = '';
                                previewContainer.classList.add('d-none');

                                // Show old image again if exists
                                if (oldPreviewContainer) {
                                    oldPreviewContainer.style.display = 'block';
                                }
                            });

                            previewBox.appendChild(img);
                            previewBox.appendChild(removeBtn);
                            col.appendChild(previewBox);
                            previewContainer.appendChild(col);
                        };

                        reader.readAsDataURL(file);
                    });
                } else {
                    previewContainer.classList.add('d-none');
                    previewContainer.innerHTML = '';

                    // Show old image if no new image selected
                    if (oldPreviewContainer) {
                        oldPreviewContainer.style.display = 'block';
                    }
                }
            });
        }


        // Attach to both inputs
        setupImagePreview('organizationLogo', 'organizationLogoPreview', 'organizationLogoOldPreview');
        setupImagePreview('principleImage', 'principleImagePreview', 'principleImageOldPreview');
    </script>
    <!-- Secure Latest CKEditor LTS -->
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('principle_message');
    </script>
@endsection
