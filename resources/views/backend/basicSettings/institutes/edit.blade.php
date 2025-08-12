@extends('backend.layouts.master')
@section('title', __('messages.edit_institute'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.institute_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.edit_institute') }}</h3>
            </div>

            <!-- form start -->
            <form id="editForm" method="POST" action="{{ route('institutes.update', $institute->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <!-- Institute Name -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="name">{{ __('messages.name') }} <span>*</span></label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="{{ __('messages.enter_name') }}" autocomplete="off"
                                    value="{{ old('name', $institute->name) }}">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>

                        <!-- Branch Name -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="branch_name">{{ __('messages.branch_name') }}</label>
                                <input type="text" name="branch_name" class="form-control" id="branch_name"
                                    placeholder="{{ __('messages.enter_branch_name') }}"
                                    value="{{ old('branch_name', $institute->branch_name) }}">
                                <span class="text-danger">{{ $errors->first('branch_name') }}</span>
                            </div>
                        </div>

                        <!-- EIIN Code -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="eiin_code">{{ __('messages.eiin_code') }} <span>*</span></label>
                                <input type="text" name="eiin_code" class="form-control" id="eiin_code"
                                    placeholder="{{ __('messages.enter_eiin_code') }}"
                                    value="{{ old('eiin_code', $institute->eiin_code) }}">
                                <span class="text-danger">{{ $errors->first('eiin_code') }}</span>
                            </div>
                        </div>

                        <!-- address -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="address">{{ __('messages.address') }}</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="{{ __('messages.enter_address') }}"
                                    value="{{ old('address', $institute->address) }}">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone">{{ __('messages.phone') }}</label>
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="{{ __('messages.enter_phone') }}"
                                    value="{{ old('phone', $institute->phone) }}">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">{{ __('messages.email') }}</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="{{ __('messages.enter_email') }}"
                                    value="{{ old('email', $institute->email) }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <!-- Medium Selection -->
                        <div class="col-md-12 mb-3">
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('messages.select_medium') }} <span>*</span>
                                    </h3>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <div class="form-group">
                                        @foreach ($mediums as $medium)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="medium_ids[]"
                                                id="medium-{{ $medium->id }}" value="{{ $medium->id }}"
                                                class="form-check-input"
                                                @if (is_array(old('medium_ids', json_decode($institute->medium_ids, true))) &&
                                            in_array($medium->id, old('medium_ids', json_decode($institute->medium_ids, true)))) checked @endif>
                                            <label class="form-check-label" for="medium-{{ $medium->id }}">
                                                {{ $medium->title }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="text-danger">{{ $errors->first('medium_ids') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Department Selection -->
                        <div class="col-md-12 mb-3">
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('messages.select_department') }} <span>*</span>
                                    </h3>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <div class="form-group">
                                        @foreach ($departments as $department)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="department_ids[]"
                                                id="department-{{ $department->id }}"
                                                value="{{ $department->id }}" class="form-check-input"
                                                @if (is_array(old('department_ids', json_decode($institute->department_ids, true))) &&
                                            in_array($department->id, old('department_ids', json_decode($institute->department_ids, true)))) checked @endif>
                                            <label class="form-check-label"
                                                for="department-{{ $department->id }}">
                                                {{ $department->title }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="text-danger">{{ $errors->first('department_ids') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Shift Selection -->
                        <div class="col-md-12 mb-3">
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('messages.select_shift') }} <span>*</span>
                                    </h3>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <div class="form-group">
                                        @foreach ($shifts as $shift)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="shift_ids[]"
                                                id="shift-{{ $shift->id }}" value="{{ $shift->id }}"
                                                class="form-check-input"
                                                @if (is_array(old('shift_ids', json_decode($institute->shift_ids, true))) &&
                                            in_array($shift->id, old('shift_ids', json_decode($institute->shift_ids, true)))) checked @endif>
                                            <label class="form-check-label" for="shift-{{ $shift->id }}">
                                                {{ $shift->title }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="text-danger">{{ $errors->first('shift_ids') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Class Selection -->
                        <div class="col-md-12 mb-3">
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('messages.select_class') }} <span>*</span>
                                    </h3>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <div class="form-group">
                                        @foreach ($classes as $class)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="class_ids[]"
                                                id="class-{{ $class->id }}" value="{{ $class->id }}"
                                                class="form-check-input"
                                                @if (is_array(old('class_ids', json_decode($institute->class_ids, true))) &&
                                            in_array($class->id, old('class_ids', json_decode($institute->class_ids, true)))) checked @endif>
                                            <label class="form-check-label" for="class-{{ $class->id }}">
                                                {{ $class->title }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="text-danger">{{ $errors->first('class_ids') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Exam Types Selection -->
                        <div class="col-md-12 mb-3">
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('messages.select_exam_type') }} <span>*</span>
                                    </h3>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <div class="form-group">
                                        @foreach ($examTypes as $examType)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="exam_type_ids[]"
                                                id="examType-{{ $examType->id }}" value="{{ $examType->id }}"
                                                class="form-check-input"
                                                @if (is_array(old('exam_type_ids', json_decode($institute->exam_type_ids, true))) &&
                                            in_array($examType->id, old('exam_type_ids', json_decode($institute->exam_type_ids, true)))) checked @endif>
                                            <label class="form-check-label" for="examType-{{ $examType->id }}">
                                                {{ $examType->title }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="text-danger">{{ $errors->first('exam_type_ids') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Weekdays Selection -->
                        <div class="col-md-12 mb-3">
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        {{ __('messages.select_weekdays') }} <span>*</span>
                                    </h3>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <div class="form-group">
                                        @foreach ($weekDays as $day)
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" name="weekly_holidays[]"
                                                id="weekday-{{ $day }}" value="{{ $day }}"
                                                class="form-check-input"
                                                @if (is_array(old('weekly_holidays', json_decode($institute->weekly_holidays, true))) &&
                                            in_array($day, old('weekly_holidays', json_decode($institute->weekly_holidays, true)))) checked @endif>
                                            <label class="form-check-label" for="weekday-{{ $day }}">
                                                {{ ucfirst($day) }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="text-danger">{{ $errors->first('weekly_holidays') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="description">{{ __('messages.description') }}</label>
                                <textarea name="description" class="form-control" id="description" rows="3"
                                    placeholder="{{ __('messages.enter_description') }}">{{ old('description', $institute->description) }}</textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            </div>
                        </div>
                        <!-- Website -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="website">{{ __('messages.website') }}</label>
                                <input type="url" name="website" class="form-control" id="website"
                                    placeholder="{{ __('messages.enter_website') }}"
                                    value="{{ old('website', $institute->website) }}">
                                <span class="text-danger">{{ $errors->first('website') }}</span>
                            </div>
                        </div>

                        <!-- Facebook Link -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="facebook_link">{{ __('messages.facebook_link') }}</label>
                                <input type="url" name="facebook_link" class="form-control" id="facebook_link"
                                    placeholder="{{ __('messages.enter_facebook_link') }}"
                                    value="{{ old('facebook_link', $institute->facebook_link) }}">
                                <span class="text-danger">{{ $errors->first('facebook_link') }}</span>
                            </div>
                        </div>

                        <!-- Youtube Link -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="youtube_link">{{ __('messages.youtube_link') }}</label>
                                <input type="url" name="youtube_link" class="form-control" id="youtube_link"
                                    placeholder="{{ __('messages.enter_youtube_link') }}"
                                    value="{{ old('youtube_link', $institute->youtube_link) }}">
                                <span class="text-danger">{{ $errors->first('youtube_link') }}</span>
                            </div>
                        </div>

                        <!-- Map Link -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="map_link">{{ __('messages.map_link') }}</label>
                                <input type="url" name="map_link" class="form-control" id="map_link"
                                    placeholder="{{ __('messages.enter_map_link') }}"
                                    value="{{ old('map_link', $institute->map_link) }}">
                                <span class="text-danger">{{ $errors->first('map_link') }}</span>
                            </div>
                        </div>

                        {{-- Logo Upload Here --}}
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>{{ __('messages.school_logo') }}</label> <br />
                                @php
                                $imageSectionTitle = 'logo';
                                if (
                                isset($institute->logo) &&
                                file_exists(
                                public_path('backend/uploads/settings/logos/' . $institute->logo),
                                )
                                ) {
                                $btnDisplay = 'none';
                                $imgDisplay = 'block';
                                $filePath = asset('backend/uploads/settings/logos/' . $institute->logo);
                                } else {
                                $btnDisplay = 'block';
                                $imgDisplay = 'none';
                                $filePath = '#';
                                }
                                @endphp
                                <div class="file-upload">
                                    <div class="image-upload-wrap mt-1 image-upload-wrap-{{ $imageSectionTitle }}"
                                        style="display: {{ $btnDisplay }}">
                                        <input name="logo"
                                            class="file-upload-input file-upload-input-{{ $imageSectionTitle }}"
                                            type='file' onchange="readURL(this, '{{ $imageSectionTitle }}');"
                                            accept="image/*" />
                                        <div class="drag-text text-center">
                                            <span class="iconify" data-icon="teenyicons:user-square-outline"></span>
                                            <span><i class="fas fa-upload"></i> &nbsp; Upload Logo</span>
                                        </div>
                                    </div>
                                    <div class="file-upload-content py-2 file-upload-content-{{ $imageSectionTitle }}"
                                        style="display: {{ $imgDisplay }}">
                                        <div class="image-title-wrap">
                                            <img class="file-upload-image file-upload-image-{{ $imageSectionTitle }}"
                                                src="{{ $filePath }}" alt="logo image" />
                                            <button type="button" onclick="removeUpload('{{ $imageSectionTitle }}')"
                                                class="remove-image">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                        </div>

                        {{-- Dashboard Banner Image Upload Here --}}
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>{{ __('messages.dashboard_banner_image') }}</label> <br />
                                @php
                                $imageSectionTitle = 'banner_image';
                                if (
                                isset($institute->dashboard_banner_image) &&
                                file_exists(
                                public_path(
                                'backend/uploads/settings/banners/' .
                                $institute->dashboard_banner_image,
                                ),
                                )
                                ) {
                                $btnDisplay = 'none';
                                $imgDisplay = 'block';
                                $filePath = asset(
                                'backend/uploads/settings/banners/' .
                                $institute->dashboard_banner_image,
                                );
                                } else {
                                $btnDisplay = 'block';
                                $imgDisplay = 'none';
                                $filePath = '#';
                                }
                                @endphp
                                <div class="file-upload">
                                    <div class="image-upload-wrap mt-1 image-upload-wrap-{{ $imageSectionTitle }}"
                                        style="display: {{ $btnDisplay }}">
                                        <input name="banner_image"
                                            class="file-upload-input file-upload-input-{{ $imageSectionTitle }}"
                                            type='file' onchange="readURL(this, '{{ $imageSectionTitle }}');"
                                            accept="image/*" />
                                        <div class="drag-text text-center">
                                            <span class="iconify" data-icon="teenyicons:user-square-outline"></span>
                                            <span><i class="fas fa-upload"></i> &nbsp; Upload Banner</span>
                                        </div>
                                    </div>
                                    <div class="file-upload-content py-2 file-upload-content-{{ $imageSectionTitle }}"
                                        style="display: {{ $imgDisplay }}">
                                        <div class="image-title-wrap">
                                            <img class="file-upload-image file-upload-image-{{ $imageSectionTitle }}"
                                                src="{{ $filePath }}" alt="banner image" />
                                            <button type="button"
                                                onclick="removeUpload('{{ $imageSectionTitle }}')"
                                                class="remove-image">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-danger">{{ $errors->first('banner_image') }}</span>
                        </div>

                        <!-- Android Link -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="android_link">{{ __('messages.mobile_app_link') }}</label>
                                <input type="url" name="android_link" class="form-control" id="android_link"
                                    placeholder="{{ __('messages.enter_mobile_app_link') }}"
                                    value="{{ old('android_link', $institute->android_link) }}">
                                <span class="text-danger">{{ $errors->first('android_link') }}</span>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>{{ __('messages.status') }}</label>
                                <select name="status" class="form-control">
                                    <option value="1"
                                        {{ old('status', $institute->status) == 1 ? 'selected' : '' }}>
                                        {{ __('messages.active') }}
                                    </option>
                                    <option value="0"
                                        {{ old('status', $institute->status) == 0 ? 'selected' : '' }}>
                                        {{ __('messages.inactive') }}
                                    </option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                    <a href="{{ route('institutes.index') }}"
                        class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection