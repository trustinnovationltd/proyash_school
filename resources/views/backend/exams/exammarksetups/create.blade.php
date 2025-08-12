@extends('backend.layouts.master')

@section('title', __('messages.add_exam_marks_setup'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.exam_marks_setup'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.add_exam_marks_setup') }}</h3>
            </div>
            <form method="POST" action="{{ route('exam-marks-setups.store') }}">
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
                        ['subject_id', 'subject', $subjects, 'title']
                        ];
                        @endphp

                        @foreach ($fields as $field)
                        <div class="col-md-4 mb-3">
                            <label for="{{ $field[0] }}">{{ __('messages.' . $field[1]) }} <span>*</span></label>
                            <select name="{{ $field[0] }}" class="form-select" id="{{ $field[0] }}" required>
                                <option value="" disabled selected>{{ __('messages.select_' . $field[1]) }}</option>
                                @foreach($field[2] as $item)
                                <option value="{{ $item->id }}" @selected(old($field[0])==$item->id)>
                                    {{ $item->{$field[3]} }}
                                </option>
                                @endforeach
                            </select>
                            @error($field[0])
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @endforeach

                        @php
                        $markFields = [
                        ['written_exam_mark', 'written_exam_mark'],
                        ['written_exam_pass_mark', 'written_exam_pass_mark'],
                        ['mcq_exam_mark', 'mcq_exam_mark'],
                        ['mcq_exam_pass_mark', 'mcq_exam_pass_mark'],
                        ['practical_mark', 'practical_mark'],
                        ['class_test_mark', 'class_test_mark'],
                        ['monthly_test_mark', 'monthly_test_mark'],
                        ['total_mark', 'total_mark'],
                        ['converted_in', 'converted_in'],
                        ['total_pass_mark', 'total_pass_mark']
                        ];
                        @endphp

                        @foreach ($markFields as $markField)
                        <div class="col-md-3 mb-3">
                            <label for="{{ $markField[0] }}">{{ __('messages.' . $markField[1]) }} <span>*</span></label>
                            <input type="number" step="0.01" name="{{ $markField[0] }}" class="form-control" id="{{ $markField[0] }}" value="{{ old($markField[0]) }}" required
                                placeholder="{{ __('messages.enter_' . $markField[1]) }}">
                            @error($markField[0])
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @endforeach

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
                    <a href="{{ route('exam-marks-setups.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection