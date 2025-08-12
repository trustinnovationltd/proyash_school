@extends('backend.layouts.master')

@section('title', __('messages.edit_exam_mark_setup'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.exam_marks_setup_management'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.edit_exam_mark_setup') }}</h3>
            </div>
            <!-- form start -->
            <form id="inputForm" method="POST" action="{{ route('exam-marks-setups.update', $examMarksSetup->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                        ['subject_id', 'subject', $subjects, 'title'],
                        ];
                    @endphp

                    @foreach ($fields as $field)
                    <div class="col-md-4 mb-3">
                        <label for="{{ $field[0] }}">{{ __('messages.' . $field[1]) }} <span>*</span></label>
                        <select name="{{ $field[0] }}" class="form-select" id="{{ $field[0] }}" required>
                            <option value="" disabled selected>{{ __('messages.select_' . $field[1]) }}</option>
                            @foreach($field[2] as $item)
                            <option value="{{ $item->id }}" {{ old($field[0], $examMarksSetup->{$field[0]}) == $item->id ? 'selected' : '' }}>
                                {{ $item->{$field[3]} }}
                            </option>
                            @endforeach
                        </select>
                        @error($field[0])
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @endforeach

                    <div class="col-md-3 mb-3">
                        <label for="written_exam_mark">{{ __('messages.written_exam_mark') }} <span>*</span></label>
                        <input type="number" name="written_exam_mark" class="form-control" id="written_exam_mark" value="{{ old('written_exam_mark', $examMarksSetup->written_exam_mark) }}" required>
                        @error('written_exam_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="written_exam_pass_mark">{{ __('messages.written_exam_pass_mark') }} <span>*</span></label>
                        <input type="number" name="written_exam_pass_mark" class="form-control" id="written_exam_pass_mark" value="{{ old('written_exam_pass_mark', $examMarksSetup->written_exam_pass_mark) }}" required>
                        @error('written_exam_pass_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mcq_exam_mark">{{ __('messages.mcq_exam_mark') }} <span>*</span></label>
                        <input type="number" name="mcq_exam_mark" class="form-control" id="mcq_exam_mark" value="{{ old('mcq_exam_mark', $examMarksSetup->mcq_exam_mark) }}" required>
                        @error('mcq_exam_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="mcq_exam_pass_mark">{{ __('messages.mcq_exam_pass_mark') }} <span>*</span></label>
                        <input type="number" name="mcq_exam_pass_mark" class="form-control" id="mcq_exam_pass_mark" value="{{ old('mcq_exam_pass_mark', $examMarksSetup->mcq_exam_pass_mark) }}" required>
                        @error('mcq_exam_pass_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="practical_mark">{{ __('messages.practical_mark') }} <span>*</span></label>
                        <input type="number" name="practical_mark" class="form-control" id="practical_mark" value="{{ old('practical_mark', $examMarksSetup->practical_mark) }}" required>
                        @error('practical_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="class_test_mark">{{ __('messages.class_test_mark') }} <span>*</span></label>
                        <input type="number" name="class_test_mark" class="form-control" id="class_test_mark" value="{{ old('class_test_mark', $examMarksSetup->class_test_mark) }}" required>
                        @error('class_test_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="monthly_test_mark">{{ __('messages.monthly_test_mark') }} <span>*</span></label>
                        <input type="number" name="monthly_test_mark" class="form-control" id="monthly_test_mark" value="{{ old('monthly_test_mark', $examMarksSetup->monthly_test_mark) }}" required>
                        @error('monthly_test_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="total_mark">{{ __('messages.total_mark') }} <span>*</span></label>
                        <input type="number" name="total_mark" class="form-control" id="total_mark" value="{{ old('total_mark', $examMarksSetup->total_mark) }}" required>
                        @error('total_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="converted_in">{{ __('messages.converted_in') }} <span>*</span></label>
                        <input type="number" name="converted_in" class="form-control" id="converted_in" value="{{ old('converted_in', $examMarksSetup->converted_in) }}" required>
                        @error('converted_in') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="total_pass_mark">{{ __('messages.total_pass_mark') }} <span>*</span></label>
                        <input type="number" name="total_pass_mark" class="form-control" id="total_pass_mark" value="{{ old('total_pass_mark', $examMarksSetup->total_pass_mark) }}" required>
                        @error('total_pass_mark') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="status">{{ __('messages.status') }}</label>
                        <select name="status" class="form-select" required>
                            <option value="1" {{ old('status', $examMarksSetup->status) == 1 ? 'selected' : '' }}>{{ __('messages.active') }}</option>
                            <option value="0" {{ old('status', $examMarksSetup->status) == 0 ? 'selected' : '' }}>{{ __('messages.inactive') }}</option>
                        </select>
                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('messages.update') }}</button>
                    <a href="{{ route('exam-marks-setups.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
